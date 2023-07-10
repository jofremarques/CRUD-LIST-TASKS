<?php

namespace App\Controllers\Api\Task\Put;

include __DIR__ . './PutUseCases.php';

use App\Controllers\BaseControllers;
use Exception;

class PutController extends BaseControllers
{
    private PutUseCases $putUseCases;

    public function __construct()
    {
        $this->putUseCases = new PutUseCases();
    }

    public function handle()
    {
        try {
            parse_str(file_get_contents("php://input"), $payload);
            $putPost = $this->putUseCases->execute($payload);

            return $this->response($putPost);
        } catch (Exception $err) {
            $this->response((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ], $err->getCode() < 400 && $err->getCode() > 406 ? $err->getCode() : 500);
        }
    }
}

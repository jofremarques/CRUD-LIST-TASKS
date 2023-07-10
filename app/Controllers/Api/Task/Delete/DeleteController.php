<?php

namespace App\Controllers\Api\Task\Delete;

include __DIR__ . './DeleteUseCases.php';

use App\Controllers\BaseControllers;
use Exception;

class DeleteController extends BaseControllers
{
    private DeleteUseCases $deleteUseCases;

    public function __construct()
    {
        $this->deleteUseCases = new DeleteUseCases();
    }

    public function handle()
    {
        try {
            parse_str(file_get_contents("php://input"), $payload);
            $responseDelete = $this->deleteUseCases->execute($payload);

            $this->response($responseDelete);
        } catch (Exception $err) {
            $this->response((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ], $err->getCode() < 400 && $err->getCode() > 406 ? $err->getCode() : 500);
        }
    }
}

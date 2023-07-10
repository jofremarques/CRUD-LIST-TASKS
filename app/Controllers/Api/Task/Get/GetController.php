<?php

namespace App\Controllers\Api\Task\Get;

include __DIR__ . './GetUseCases.php';

use App\Controllers\BaseControllers;
use Exception;

class GetController extends BaseControllers
{
    private GetUseCases $getUseCases;

    public function __construct()
    {
        $this->getUseCases = new GetUseCases();
    }

    public function handle()
    {
        try {
            $payload = $_GET;

            $GetPost = $this->getUseCases->execute($payload);

            $this->response($GetPost);
        } catch (Exception $err) {
            $this->response((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ], $err->getCode() < 400 && $err->getCode() > 406 ? $err->getCode() : 500);
        }
    }
}

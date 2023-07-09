<?php

namespace App\Controllers\Api\Task\Put;

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

            $putPost = $this->putUseCases->execute($payload);

            return $this->response->setJSON($putPost)->setStatusCode(200);
        } catch (Exception $err) {
            return $this->response->setJSON((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ])->setStatusCode($err->getCode() ? $err->getCode() : 500);
        }
    }
}

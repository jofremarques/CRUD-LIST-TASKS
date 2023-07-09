<?php

namespace App\Controllers\Api\Task\Delete;

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
  
            $responseDelete = $this->deleteUseCases->execute($payload);

            return $this->response->setJSON($responseDelete)->setStatusCode(200);
        } catch (Exception $err) {
            return $this->response->setJSON((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ])->setStatusCode($err->getCode() ? $err->getCode() : 500);
        }
    }
}

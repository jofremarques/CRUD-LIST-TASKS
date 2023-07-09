<?php

namespace App\Controllers\Api\Task\Get;

use App\Api\Payments\Post\PostUseCases;
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

            $GetPost = $this->getUseCases->execute($payload);

            return $this->response->setJSON($GetPost)->setStatusCode(200);
        } catch (Exception $err) {
            return $this->response->setJSON((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ])->setStatusCode($err->getCode() ? $err->getCode() : 500);
        }
    }
}

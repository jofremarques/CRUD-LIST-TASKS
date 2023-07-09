<?php

namespace App\Controllers\Api\Task\Post;

use App\Api\Payments\Post\PostUseCases;
use App\Controllers\BaseControllers;
use Exception;

class PostController extends BaseControllers
{
    private PostUseCases $postUseCases;

    public function __construct()
    {
        $this->postUseCases = new PostUseCases();
    }

    public function handle()
    {
        try {

            $responsePost = $this->postUseCases->execute($payload);

            return $this->response->setJSON($responsePost)->setStatusCode(200);
        } catch (Exception $err) {
            return $this->response->setJSON((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ])->setStatusCode($err->getCode() ? $err->getCode() : 500);
        }
    }
}

<?php

namespace App\Controllers\Api\Task\Post;

include __DIR__ . './PostUseCases.php';

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
            $payload = $_POST;
            $responsePost = $this->postUseCases->execute($payload);

            $this->response($responsePost);
        } catch (Exception $err) {
            $this->response((object)[
                "error" => $err->getMessage() ? $err->getMessage() : 'Did something wrong happen'
            ], $err->getCode() < 400 && $err->getCode() > 406 ? $err->getCode() : 500);
        }
    }
}

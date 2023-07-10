<?php

namespace App\Controllers\Api\Task\Post;
include(__DIR__."../../../../../../app/Models/TaskEntity.php");

use TaskEntity;

class PostUseCases
{
    public function execute($payload): Object
    {
        $taskEntity = new TaskEntity();

        $id =  $taskEntity->save([
            "title" => $payload['titulo'],
            "estimated" => $payload['entrega'],
            "description" => $payload['descricao'],
            "priority" => $payload['prioridade'],
            "status" => $payload['status'],
        ]);

        return (object)[
            "sucesso" => "Salvo com sucesso",
            "id" => $id
        ];
    }
}

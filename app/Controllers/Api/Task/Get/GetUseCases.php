<?php

namespace App\Controllers\Api\Task\Get;

include(__DIR__ . "../../../../../../app/Models/TaskEntity.php");
use TaskEntity;

class GetUseCases
{

    public function execute($payload): array
    {
        $taskEntity = new TaskEntity();

        return array_map(function($task){
            return (object)[
                "id" => $task['id'],
                "titulo" =>$task['title'],
                "entrega" =>$task['estimated'],
                "descricao" =>$task['description'],
                "prioridade" =>$task['priority'],
                "status" =>$task['status'],
            ];
        }, $taskEntity->findMany($payload));
    }
}

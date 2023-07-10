<?php

namespace App\Controllers\Api\Task\Delete;

use TaskEntity;

include(__DIR__."../../../../../../app/Models/TaskEntity.php");

class DeleteUseCases
{
    public function execute($payload): Object
    {
        $taskEntity = new TaskEntity();

        $taskEntity->delete([
            "id" => intval($payload['id'])
        ]);

        return (Object)[
            "sucesso" => "Deletado com sucesso",
            "id" => $payload['id']
        ];
    }
}

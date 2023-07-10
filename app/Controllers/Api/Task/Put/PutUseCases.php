<?php

namespace App\Controllers\Api\Task\Put;

include(__DIR__ . "../../../../../../app/Models/TaskEntity.php");

use TaskEntity;

class PutUseCases
{

    public function execute($payload)
    {
        $taskEntity = new TaskEntity();

        $taskEntity->update([
            "id" => intval($payload['id'])
        ], [
            "title" => $payload['titulo'],
            "estimated" => $payload['entrega'],
            "description" => $payload['descricao'],
            "priority" => $payload['prioridade'],
            "status" => $payload['status'],
        ]);

        return (object)[
            "sucesso" => "Salvo com sucesso",
            "id" => $payload['id']
        ];
    }
}

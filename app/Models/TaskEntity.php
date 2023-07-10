<?php

use App\Models\BaseModels;

class TaskEntity extends BaseModels
{
    protected string $table = 'tasks';
    protected string $primaryKey = 'id';
    protected array $columns = ['title', 'describe', 'priority', 'status', 'conclude_at', 'created_at', 'updated_at'];
}

<?php

use App\Models\BaseModel;

class TaskEntity extends BaseModel
{
    protected string $table = 'tasks';
    protected string $primaryKey = 'id';
    protected array $columns = ['title', 'describe', 'priority', 'status', 'conclude_at', 'created_at', 'updated_at'];
}

<?php

namespace App\Models;

use App\Configs\Database;
use PDO;

abstract class BaseModel extends Database
{
    protected string $table;
    protected array $columns;

    public function getQueryColumns(array $queryString): Object
    {
        return (object)[
            "columns" => join(",", array_keys($queryString)),
            "setColumns" => join(",", array_map(function ($index) {
                return ":" . $index;
            }, array_keys($queryString)))
        ];
    }

    public function findFirst(array $where = [], ?String $options = '', array $columns): Object
    {
        $connect = $this->instances['pdo'];
        $table = $this->table;

        $queryColumns = array_map(function ($index, $value) {
            return "$index = '$value'";
        }, array_keys($where), array_values($where));

        $queryString =  count($queryColumns) > 0 ? join(",", $queryColumns) : "1=1";
        $getColumns = join(",", $columns);

        $founds = $connect->query("SELECT $getColumns FROM $table WHERE $queryString $options");

        return count($founds->fetch(PDO::FETCH_ASSOC)) == 0 ? null : $founds->fetch(PDO::FETCH_ASSOC)[0];
    }

    public function findMany(array $where = [], ?String $options = '', array $columns): array
    {
        $connect = $this->instances['pdo'];
        $table = $this->table;

        $queryColumns = array_map(function ($index, $value) {
            return "$index = '$value'";
        }, array_keys($where), array_values($where));

        $queryString =  count($queryColumns) > 0 ? join(",", $queryColumns) : "1=1";
        $getColumns = join(",", $columns);

        $founds = $connect->query("SELECT $getColumns FROM $table WHERE $queryString $options");

        return $founds->fetch(PDO::FETCH_ASSOC);
    }

    public function save(array $queryString): int|string
    {
        $connect = $this->instances['pdo'];
        $table = $this->table;

        $queryColumns = $this->getQueryColumns($queryString);

        $stmt = $connect->prepare("INSERT INTO $table ($queryColumns->columns) VALUES($queryColumns->setColumns)");
        $stmt->execute($queryString);

        return $connect->lastInsertId();
    }


    public function update(array $where = [], array $data): int|string
    {
        $connect = $this->instances['pdo'];
        $table = $this->table;

        $queryColumns = array_map(function ($index, $value) {
            return "$index = :$value";
        }, array_keys($where), array_values($where));

        $queryString = count($queryColumns) > 0 ? join(",", $queryColumns) : "1=1";

        $dataToUpdate = join(",", array_map(function ($index, $value) {
            return "$index = :$value";
        }, array_keys($data), array_values($data)));

        $stmt = $connect->prepare("UPDATE $table SET $dataToUpdate WHERE $queryString");
        $stmt->execute(array_merge($where, $data));

        return $connect->lastInsertId();
    }

    public function delete(array $where = []): void
    {
        $connect = $this->instances['pdo'];
        $table = $this->table;

        $queryColumns = array_map(function ($index, $value) {
            return "$index = :$value";
        }, array_keys($where), array_values($where));

        $queryString =  count($queryColumns) > 0 ? join(",", $queryColumns) : "1=1";

        $stmt = $connect->prepare("DELETE FROM $table WHERE $queryString");
        $stmt->bindParam($where);
        $stmt->execute();
    }
}

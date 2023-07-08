<?php

namespace App\Configs;

use PDO;
use PDOException;

class Database
{
    protected PDO $instances;

    public static function getInstance(): PDO
    {
        try {
            $config = new Config();
            $database =  $config->database;

            $pdo = new PDO($database['type'] . ':host=' . $database['hostname'] . ';dbname=' . $database['name'], $database['username'], $database['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (!isset(self::$instances['pdo'])) {
                self::$instances['pdo'] = $pdo;
            }

            return self::$instances['pdo'];
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        };
    }
}

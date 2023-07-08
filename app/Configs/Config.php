<?php

namespace App\Configs;

class Config
{
    public array $files = [
        "routes" => "/Routes",
        "baseControllers" => "../Controllers/BaseControllers",
        "database" => "/Database"
    ];

    /**  DATABSE CONFIGS  */
    public array $database = [
        "type" => PROCESS_ENV['TYPE'],
        "hostname" => PROCESS_ENV['HOSTNAME'],
        "name" => PROCESS_ENV['DB_NAME'],
        "username" => PROCESS_ENV['DB_USERNAME'],
        "password" => PROCESS_ENV['DB_PASSWORD']
    ];
}

<?php

//namespace Core;

class Database
{
    private $connection;

    public function __construct($config)
    {
//        $config = require './config.php';
        $dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['database'] . ";charset=utf8mb4";
        $this->connection = new PDO($dsn, $config['user'], $config['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

}
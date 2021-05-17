<?php

namespace App\Model;

class Database
{
    private string $dsn;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=library';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

}
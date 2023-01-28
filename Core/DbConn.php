<?php

namespace Core;

use \PDO;
use \PDOException;

class DbConn
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbName = 'Warehouse';
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    public $conn;

     public function connect()
    {
        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbName,
                $this->user,
                $this->password,
                $this->options
            );
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        };
    }
}

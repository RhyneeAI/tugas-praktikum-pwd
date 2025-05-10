<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'perpus';
    private $connection;

    public function __construct() {
        try {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
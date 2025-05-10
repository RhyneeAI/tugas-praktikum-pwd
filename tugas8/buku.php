<?php
require_once 'database.php';

class Buku {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function showBooks() {
        $query = "SELECT * FROM buku";
        $result = $this->db->query($query);
        return $result;
    }
}
<?php
require_once 'conn.php';

class Model {
    protected $conn;
    protected $table;
    protected $primaryKey;

    public function __construct() {
        $this->conn = new Conn();
    }
}
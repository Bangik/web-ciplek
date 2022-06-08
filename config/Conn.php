<?php
session_start();
require_once('./vendor/autoload.php');
use Dotenv\Dotenv;

class Conn {
    public $server_name;
    public $username;
    public $password;
    public $db_name;
    public $conn;
    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
        $this->server_name = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASS'];
        $this->db_name = $_ENV['DB_NAME'];

        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }else {
            return $this->conn;
        }
    }
    public function query($sql) {
        $result = $this->conn->query($sql);
        return $result;
    }
}
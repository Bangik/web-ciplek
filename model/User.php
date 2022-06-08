<?php

require_once './config/Model.php';

Class User extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function getAll() {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = {$id}";
        $result = $this->conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }

    public function insert($data) {
        $keys = array_keys($data);
        $values = array_values($data);
        $sql = "INSERT INTO {$this->table} (" . implode(',', $keys) . ") VALUES ('" . implode("','", $values) . "')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function update($data, $id) {
        $keys = array_keys($data);
        $values = array_values($data);
        $sql = "UPDATE {$this->table} SET ";
        foreach ($keys as $key) {
            $sql .= "{$key} = '{$values[$key]}', ";
        }
        $sql = rtrim($sql, ', ');
        $sql .= " WHERE {$this->primaryKey} = {$id}";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = {$id}";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function login($username, $password) {

        if(empty($username) || empty($password)) {
            return false;
        }

        $sql = "SELECT * FROM {$this->table} WHERE username = '{$username}'";
        $result = $this->conn->query($sql);
        $data = $result->fetch_assoc();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['user'] = $data['name'];
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
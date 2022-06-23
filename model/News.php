<?php
require_once './config/Model.php';

class News extends Model {
    protected $table = 'news';
    protected $primaryKey = 'id';

    public function getAll() {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
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
        foreach ($keys as $key => $value) {
            $sql .= "{$value} = '{$values[$key]}', ";
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
}
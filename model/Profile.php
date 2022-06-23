<?php
require_once './config/Model.php';

class Profile extends Model {
    protected $table = 'profile';
    protected $primaryKey = 'id';

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = {$id}";
        $result = $this->conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
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
}
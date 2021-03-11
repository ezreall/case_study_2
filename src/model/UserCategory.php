<?php


namespace App\model;


use PDO;

class UserCategory
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }
}
<?php


namespace App\Admin\Model;

use PDO;

class Category
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
    public function getCategory($id)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }

    public function addCategory($category_name)
    {
        $sql = "INSERT INTO categories(category_name) VALUES(:category_name)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":category_name", $category_name);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateCategory($id,$category_name)
    {
        $sql = "UPDATE categories SET category_name=:category_name WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":id", $id);
        $stml->bindValue("category_name", $category_name);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchCategory($category_name)
    {
        $sql = "SELECT * FROM categories";
        if (!empty($category_name)) {
            $sql = "SELECT * FROM categories WHERE category_name LIKE '%$category_name%'";
        }
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}
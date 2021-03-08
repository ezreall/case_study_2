<?php


namespace App\Admin\Model;

use PDO;

class Categorie
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategorie()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }
    public function getCategorie($id)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }

    public function addCategorie($categorie_name)
    {
        $sql = "INSERT INTO categories(categorie_name) VALUES(:categorie_name)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":categorie_name", $categorie_name);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateCategorie($id,$categorie_name)
    {
        $sql = "UPDATE categories SET categorie_name=:categorie_name WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":id", $id);
        $stml->bindValue("categorie_name", $categorie_name);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function deleteCategorie($id)
    {
        $sql = "DELETE FROM categories WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchCaetegorie($categorie_name)
    {
        $sql = "SELECT * FROM categories WHERE LIKE '%$categorie_name%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }


}
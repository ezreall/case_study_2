<?php


namespace App\Model;

use PDO;

class Cartegorie
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCartegorie()
    {
        $sql = "SELECT * FROM categorie";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addCartegorie($id,$cartegorie_name)
    {
        $sql = "INSERT INTO cartegorie(id,category_name) VALUES(id:,:category_name)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":id", $id );
        $stml->bindValue("categorie_name",$cartegorie_name );
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateCartegorie($id,$cartegorie_name)
    {
        $sql = "INSERT INTO cartegorie(id,category_name) VALUES(id:,:category_id)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":id", $id );
        $stml->bindValue("categorie_name",$cartegorie_name );
        $stml->execute();
        return $stml->fetchAll();
    }

    public function deleteCartegorie($id)
    {
        $sql = "DELETE FROM cartegorie WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchCaretegorie($cartegorie_name)
    {
        $sql = "SELECT * FROM cartegorie WHERE LIKE '%$cartegorie_name%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }


}
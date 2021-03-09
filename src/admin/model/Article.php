<?php

namespace App\Admin\Model;

use PDO;

class Article
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllArticle()
    {
        $sql = "SELECT * FROM articles";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getArticle($id)
    {
        $sql = "SELECT * FROM articles WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }

    public function addArticle($categorie_id, $id, $name_articles, $date, $content,$img)
    {
        $sql = "INSERT INTO articles(categorie_id,id,name_articles,date,content,img) VALUES(:categorie_id,:id,:name_articles,:date,:content,:img)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":categorie_id", $categorie_id);
        $stml->bindValue(":id", $id);
        $stml->bindValue(":name_articles", $name_articles);
        $stml->bindValue(":date", $date);
        $stml->bindValue(":content", $content);
        $stml->bindValue(":img", $img);
        $stml->execute();
//        var_dump($img);
        return $stml->fetchAll();
    }

    public function updateArticle($categorie_id, $id ,$name_articles, $date, $content,$img)
    {
        $sql = "UPDATE  articles SET categorie_id=:categorie_id,name_articles=:name_articles,date=:date,content=:content,img=:img WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":id", $id);
        $stml->bindValue(":categorie_id",  123);
        $stml->bindValue(":name_articles", $name_articles);
        $stml->bindValue(":date", $date);
        $stml->bindValue(":content", $content);
        $stml->bindValue(":img", $img);
       $hello= $stml->execute();
        return $stml->fetchAll();
    }

    public function deleteArticle($id)
    {
        $sql = "DELETE FROM articles WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchArticle($name_articles)
    {
        $sql = "SELECT * FROM articles";
        if (!empty($name_articles)) {
            $sql = "SELECT * FROM articles WHERE name_articles LIKE '%$name_articles%'";
        }
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

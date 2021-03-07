<?php

namespace App\Model;

use PDO;

class Article
{
    protected $database;

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

    public function addArticle($category_id, $id, $name_articles, $date, $content)
    {
        $sql = "INSERT INTO articles(category_id,id,name_articles,date,content) VALUES(:category_id,:id,:name_articles,:date,:content)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":category_id", $category_id);
        $stml->bindValue(":id", $id);
        $stml->bindValue("name_articles", $name_articles);
        $stml->bindValue("date", $date);
        $stml->bindValue("content", $content);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateArticle($category_id, $id, $name_articles, $date, $content)
    {
        $sql = "INSERT INTO articles(category_id,id,name_articles,date,content) VALUES(:category_id,:id,:name_articles,:date,:content)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":category_id", $category_id);
        $stml->bindValue(":id", $id);
        $stml->bindValue("name_articles", $name_articles);
        $stml->bindValue("date", $date);
        $stml->bindValue("content", $content);
        $stml->execute();
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
        $sql = "SELECT * FROM articles WHERE LIKE '%$name_articles%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }



}

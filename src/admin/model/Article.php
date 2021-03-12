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
        $sql = "SELECT * FROM v_article_details";
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

    public function addArticle($category_id, $id, $name_articles, $date, $content,$img)
    {

        $sql = "INSERT INTO articles(`category_id`,`id`,`name_articles`,`date`,`content`,`img`) VALUES(:category_id,:id,:name_articles,:date,:content,:img)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":category_id", $category_id);
        $stml->bindValue(":id", $id);
        $stml->bindValue(":name_articles", $name_articles);
        $stml->bindValue(":date", $date);
        $stml->bindValue(":content", $content);
        $stml->bindValue(":img", $img);
//        var_dump($category_id);
//        var_dump(123);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateArticle($category_id, $id ,$name_articles, $date, $content,$img)
    {

        $sql = "UPDATE  articles SET category_id=:category_id,name_articles=:name_articles,date=:date,content=:content,img=:img WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":category_id", $category_id);
        $stml->bindValue(":id", $id);
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

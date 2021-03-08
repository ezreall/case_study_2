<?php

namespace App\Admin\Model;

use PDO;

class Comment
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllComment()
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function getComment($id)
    {
        $sql = "SELECT * FROM comments WHERE id= :id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }

    public function addComment($article_id,$id,$content, $username, $date)
    {
        try{
            $sql = "INSERT INTO comments(article_id,id,content,username,date) VALUES(:article_id,:id,:content,:username,:date)";
            $stml = $this->database->prepare($sql);
            $stml->bindValue(":article_id", $article_id);
            $stml->bindValue(":id", $id);
            $stml->bindValue(":content", $content);
            $stml->bindValue(":username", $username);
            $stml->bindValue(":date", $date);
            $stml->execute();
            return $stml->fetchAll();
        }catch (\Exception $exception){
            echo $exception;
        }

    }

    public function updateComment( $article_id,$id,$content, $username, $date)
    {
        try {
            $sql = "UPDATE  comments SET article_id=:article_id,content=:content,username=:username,date=:date WHERE id=:id";
            $stml = $this->database->prepare($sql);
            $stml->bindValue(":article_id", $article_id);
            $stml->bindValue(":id", $id);
            $stml->bindValue(":content", $content);
            $stml->bindValue(":username", $username);
            $stml->bindValue(":date", $date);
            var_dump($id);
            var_dump($content);
            var_dump($username);
            var_dump($date);
            $stml->execute();
            return $stml->fetchAll();
        }catch (\Exception $exception){
            echo $exception;
        }
    }

    public function deleteComment($id)
    {
        $sql = "DELETE FROM comments WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchComment($username)
    {
        $sql = "SELECT * FROM comments WHERE LIKE '%$username%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }


}

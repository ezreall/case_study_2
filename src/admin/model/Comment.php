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

    public function addComment($content, $username, $date)
    {
        try{
            $sql = "INSERT INTO comments(`content`,`username`,`date`) VALUES(?,?,?)";
            $stml = $this->database->prepare($sql);
            $stml->bindParam(1, $content);
            $stml->bindParam(2, $username);
            $stml->bindParam(3, $date);
            $stml->execute();
             var_dump($stml->execute());
            return $stml->fetchAll();
        }catch (\Exception $exception){
            echo $exception;
        }

    }

    public function updateComment( $article_id,$id,$content, $username, $date)
    {
        try {
            $sql = "UPDATE  comments SET content=:content,username=:username,date=:date,article_id=:article_id WHERE id=:id";
            $stml = $this->database->prepare($sql);
            $stml->bindValue(":id", $id);
            $stml->bindValue(":content", $content);
            $stml->bindValue(":username", $username);
            $stml->bindValue(":date", $date);
            $stml->bindValue(":article_id", $article_id);
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

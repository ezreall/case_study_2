<?php

namespace App\Admin\Model;

use PDO;

class Introduce
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getALlIntroduce()
    {
        $sql = "SELECT * FROM introduces";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function getIntroduce($id){
        $sql = "SELECT * FROM introduces WHERE id= :id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }
    public function addIntroduce($content)
    {
        $sql = "INSERT INTO  introduces (content) VALUE (?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $content);
        $stmt->execute();
        return $stmt->fetchAll();
    }
//
//    public function updateIntroduce($id, $content)
//    {
//        $sql = " UPDATE introduces SET content=:content where id=:id";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindValue(':id', $id);
//        $stmt->bindValue('content', $content);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }
}

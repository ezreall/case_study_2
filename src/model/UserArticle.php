<?php


namespace App\model;

use PDO;

class UserArticle
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();

    }
    public function getArticle($id)
    {
        $sql = "SELECT * FROM v_article_details WHERE id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
        return $stml->fetch();
    }



}
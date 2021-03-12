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
    public function getArticle()
    {

        $sql = "SELECT * FROM v_article_details";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }



}
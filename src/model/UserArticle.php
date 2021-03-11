<?php

namespace App\Model;

use PDO;

class UserArticle
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
    }}

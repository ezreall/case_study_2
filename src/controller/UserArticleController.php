<?php


namespace App\controller;

use App\Model\UserArticle;
use App\Model\UserCategory;

class UserArticleController
{
    protected $UserArticle;
    protected $UserCategory;


    public function __construct()
    {
        $this->UserArticle = new UserArticle();
        $this->UserCategory = new UserCategory();
    }

    public function getArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $userarticles = $this->UserArticle->getArticle($id);
            include 'list.php';
        }

    }
}
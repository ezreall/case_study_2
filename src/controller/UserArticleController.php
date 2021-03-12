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

    }

    public function UserArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $userarticles = $this->UserArticle->getArticle();
            include 'src/view/list.php';
        }

    }
}
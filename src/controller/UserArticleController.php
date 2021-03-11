<?php

namespace App\Controller;

use App\Model\UserArticle;
use App\Model\UserCategory;
use http\Header;

class UserArticleController
{

    protected $UserArticle;
    protected $categories;

    public function __construct()
    {
        $this->UserArticle = new UserArticle();
        $this->categories = new UserCategory();
    }

    public function UserArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->UserArticle->getAllArticle();
            include 'index.php';
        }
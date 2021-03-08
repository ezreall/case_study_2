<?php

namespace App\Admin\Controller;

use App\Admin\Model\Article;
use http\Header;

class ArticleController
{

    protected $Article;

    public function __construct()
    {
        $this->Article = new Article();
    }

    public function Article()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/admin/view/articles/index.php';
        }
    }

    public function addArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/admin/view/articles/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category_id'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $img = $_POST['img'];
            $this->Article->addArticle($category_id, $id, $name_articles, $date, $content,$img);
            include 'src/admin/view/articles/add.php';
        }
    }

    public function deleteArticle()
    {
        $id = $_REQUEST['id'];
        $this->Article->deleteArticle($id);
        $this->Article();
    }

    public function updateArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $article = $this->Article->getArticle($id);
            include 'src/admin/view/articles/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump();
            $categorie_id = 1333;
            $id = (int)$_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $img = $_POST['img'];
            $this->Article->updateArticle($categorie_id, $id, $name_articles, $date, $content,$img);
            header('location:admin.php?page=Article_admin');
        }
    }
    public function searchArticle()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $articles = $this->Article->getAllArticle();
            include "src/admin/view/articles/index.php";
            var_dump($articles);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name_articles = $_POST['name_articles'];
            $articles = $this->Article->searchArticle($name_articles);
            include "src/admin/view/articles/index.php";
        }
    }
}
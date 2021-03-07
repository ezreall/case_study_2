<?php

namespace App\Controller;

use App\Model\Article;
use App\Model\Cartegorie;

class Controller
{

    protected $Article;
    protected $Cartegorie;

    public function __construct()
    {
        $this->Article = new Article();
        $this->Cartegorie = new Cartegorie();

    }

    public function Article()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/view/articles/index.php';
        }
    }

    public function Cartegorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $cartegories = $this->Cartegorie->getAllCartegorie();
            include 'src/view/cartegorie/index.php';
        }
    }

    public function Comment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/view/articles/index.php';
        }
    }

    public function addArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/view/articles/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $this->Article->addArticle($category_id, $id, $name_articles, $date, $content);
            include 'src/view/articles/add.php';
        }
    }

    public function addCartegorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $cartegories = $this->Cartegorie->getAllCartegorie();
            include 'src/view/articles/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $this->Cartegorie->addCartegorie();
            include 'src/view/articles/add.php';
        }
    }

    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
            include 'src/view/articles/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $this->Article->addArticle($category_id, $id, $name_articles, $date, $content);
            include 'src/view/articles/add.php';
        }
    }

    public function deleteArticle()
    {
        $id = $_REQUEST['id'];
        $this->Article->deleteArticle($id);
        $this->Article();
    }

    public function deleteCartegorie()
    {
        $id = $_REQUEST['id'];
        $this->Cartegorie->deleteCartegorie($id);
        $this->Cartegorie();
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
            $article = $this->Article->getAllArticle();
            include 'src/view/articles/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $this->Article->updateArticle($category_id, $id, $name_articles, $date, $content);
            header("location:index.php");
        }
    }

    public function updateCartegorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $cartegories = $this->Cartegorie->getAllCartegorie();
            include 'src/view/cartegorie/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $category_name = $_POST['category_name'];
            $this->Cartegorie->updateCartegorie($category_name, $id);
            header("location:index.php");
        }
    }

    public function updateArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $article = $this->Article->getAllArticle();
            include 'src/view/articles/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $this->Article->updateArticle($category_id, $id, $name_articles, $date, $content);
            header("location:index.php");
        }
    }
}
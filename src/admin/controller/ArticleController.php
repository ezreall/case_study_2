<?php

namespace App\Admin\Controller;

use App\Admin\Model\Article;
use App\Admin\Model\Comment;
use App\Admin\Model\Category;
use http\Header;

class ArticleController
{

    protected $Article;
    protected $categories;

    public function __construct()
    {
        $this->Article = new Article();
        $this->categories = new Category();
    }

    public function Article()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $articles = $this->Article->getAllArticle();
//            var_dump($articles);
            include 'src/admin/view/articles/index.php';
        } else {
            $name_articles = $_POST['name_articles'];
            $articles = $this->Article->searchArticle($name_articles);
            include 'src/admin/view/articles/index.php';
        }
    }




    public
    function addArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->categories->getAllCategory();
//            var_dump($categories);
            include 'src/admin/view/articles/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = $_POST['category_id'];
            $id = $_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            if ($img == null) {
                $img = $_POST['img'];
            }
            $this->Article->addArticle($category_id, $id, $name_articles, $date, $content, $img);
            header('location:admin.php?page=Article_admin');
//            echo "<pre>";
//            print_r($_FILES);
//            die;

        }
    }

    public
    function deleteArticle()
    {
        $id = $_REQUEST['id'];
        $this->Article->deleteArticle($id);
        $this->Article();
    }

    public
    function updateArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $categories = $this->categories->getALlCategory();
//            var_dump($categories);
            $article = $this->Article->getArticle($id);

            include 'src/admin/view/articles/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id = (int)$_POST['category_id'];
//            var_dump($category_id);
            $id = (int)$_POST['id'];
            $name_articles = $_POST['name_articles'];
            $date = $_POST['date'];
            $content = $_POST['content'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
//            var_dump(123);
//            die;
            $this->Article->updateArticle($category_id, $id, $name_articles, $date, $content, $img);
            header('location:admin.php?page=Article_admin');
        }
    }

    public
    function searchArticle()
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
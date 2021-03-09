<?php

namespace App\Admin\Controller;

use App\Admin\Model\Comment;
use http\Header;

class CommentController
{
    protected $Comment;

    public function __construct()
    {
        $this->Comment = new Comment();

    }

    public function Comment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $comments = $this->Comment->getAllComment();
            include 'src/admin/view/comment/index.php';
        } else{
            $username=$_POST['username'];
            $comments=$this->Comment->searchComment($username);
           include 'src/admin/view/comment/index.php';
        }
    }

    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $comments = $this->Comment->getAllComment();
            include 'src/admin/view/comment/add.php';
        } else{
            $content = $_REQUEST['content'];
            $username = $_REQUEST['username'];
            $date = $_REQUEST['date'];
            $this->Comment->addComment($content, $username, $date);
            include 'src/admin/view/comment/add.php';
        }
    }

    public function updateComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $comments = $this->Comment->getComment($id);
            var_dump($comments);
            include 'src/admin/view/comment/update.php';
            //var_dump($_SERVER['REQUEST_METHOD']);
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_SERVER['REQUEST_METHOD']);
            $article_id = 1333;
            $id = (int)$_POST['id'];
            $content = $_POST['content'];
            $username = $_POST['username'];
            $date = $_POST['date'];
            $this->Comment->updateComment($article_id,$id,$content, $username, $date);
            header('location:admin.php?page=Comment_admin');
        }
    }

    public function deleteComment()
    {
        $id = $_REQUEST['id'];
        $this->Comment->deleteComment($id);
        $this->Comment();
    }
    public function searchComment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $comments= $this->Comment->getAllComment();
            include "src/admin/view/comment/index.php";

        }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['search'];
            $comments = $this->Comment->searchComment($username);
            include "src/admin/view/comment/index.php";
        }
    }
}
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
        }
    }

    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $comments = $this->Comment->getAllComment();
            include 'src/admin/view/comment/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $article_id = $_POST['article_id'];
            $id = $_POST['id'];
            $content = $_POST['content'];
            $username = $_POST['username'];
            $date = $_POST['date'];
            $this->Comment->addComment($article_id,$id,$content, $username, $date);
            var_dump($this);
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

//    public function employeeList()
//    {
//        if ($_SERVER["REQUEST_METHOD"] == "GET"){
//            $employee_list = $this->employeeModel->getAll();
//            include "src/View/employee/employee-list.php";
//
//        }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            $search = $_POST['search'];
//            $employee_list = $this->employeeModel->searchEmployee($search);
//            include "src/View/employee/employee-list.php";
//        }
//    }
}
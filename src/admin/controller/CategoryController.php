<?php

namespace App\Admin\Controller;

use App\Admin\Model\Category;
use http\Header;

class CategoryController
{
    protected $Category;

    public function __construct()
    {
        $this->Category = new Category();

    }

    public function Category()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->Category->getAllCategory();
            include 'src/admin/view/category/index.php';
        }else{
            $category_name=$_POST['category_name'];
            $categories=$this->Category->searchCategory($category_name);
            include 'src/admin/view/category/index.php';
        }
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->Category->getAllCategory();
            include 'src/admin/view/category/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['category_name'];
            $this->Category->addCategory($category_name);
            include 'src/admin/view/category/add.php';
        }
    }

    public function deleteCategory()
    {
        $id = $_REQUEST['id'];
        $this->Category->deleteCategory($id);
        $this->Category();
    }

    public function updateCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $categories = $this->Category->getCategory($id);
            include 'src/admin/view/category/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = (int)$_POST['id'];
            $category_name = $_POST['category_name'];
            $this->Category->updateCategory($id, $category_name);
            header("location:admin.php?page=Category_admin");
        }
    }
    public function searchCategory()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categories = $this->Category->getAllCategory();
            include "src/admin/view/articles/index.php";
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $category_name = $_POST['name_articles'];
            $categories = $this->Category->searchCategory($category_name);
            include "src/admin/view/articles/index.php";
        }
    }


}
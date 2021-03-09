<?php

namespace App\Admin\Controller;

use App\Admin\Model\Categorie;
use http\Header;

class CategorieController
{
    protected $Categorie;

    public function __construct()
    {
        $this->Categorie = new Categorie();

    }

    public function Categorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->Categorie->getAllCategorie();
            include 'src/admin/view/categorie/index.php';
        }else{
            $categorie_name=$_POST['categorie_name'];
            $categories=$this->Categorie->searchCaetegorie($categorie_name);
            include 'src/admin/view/categorie/index.php';
        }
    }

    public function addCategorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->Categorie->getAllCategorie();
            include 'src/admin/view/categorie/add.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categorie_name = $_POST['categorie_name'];
            $this->Categorie->addCategorie($categorie_name);
            include 'src/admin/view/categorie/add.php';
        }
    }

    public function deleteCategorie()
    {
        $id = $_REQUEST['id'];
        $this->Categorie->deleteCategorie($id);
        $this->Categorie();
    }

    public function updateCategorie()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $categories = $this->Categorie->getCategorie($id);
            include 'src/admin/view/categorie/update.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_SERVER['REQUEST_METHOD']);
            echo '123';
            $id = (int)$_POST['id'];
            $categorie_name = $_POST['categorie_name'];
            var_dump($id);
            var_dump($categorie_name);
            $this->Categorie->updateCategorie($id, $categorie_name);
            header("location:admin.php?page=Categorie_admin");
        }
    }
    public function searchCategorie()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categories = $this->Categorie->getAllCategorie();
            include "src/admin/view/articles/index.php";
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $categorie_name = $_POST['name_articles'];
            $categories = $this->Categorie->searchCaetegorie($categorie_name);
            include "src/admin/view/articles/index.php";
        }
    }


}
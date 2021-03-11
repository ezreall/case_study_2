<?php

namespace App\Controller;

use App\Model\UserCategory;
use http\Header;

class UserCategoryController
{
    protected $UserCategory;

    public function __construct()
    {
        $this->UserCategory = new USerCategory();

    }

    public function UserCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->UserCategory->getAllCategory();
            include 'src/admin/view/category/index.php';
        }
    }
}
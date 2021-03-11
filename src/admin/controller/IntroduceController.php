<?php

namespace App\Admin\Controller;

use App\Admin\Model\Introduce;

class IntroduceController
{
    protected $Introduce;

    public function __construct()
    {
        $this->Introduce = new Introduce();
    }

    public function Introduce()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $introduces = $this->Introduce->getALlIntroduce();
//            var_dump($introduces);
            include 'src/admin/view/introduce/index.php';

        }
    }

    public function addIntroduce()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $introduces = $this->Introduce->getALlIntroduce();
            include 'src/admin/view/introduce/add.php';

        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $content = $_POST['content'];
//            var_dump($content);
            $this->Introduce->addIntroduce($content);
//            include 'src/admin/view/introduce/index.php';
            header('location:admin.php?page=Introduce_admin');
        }
    }

    public function updateIntroduce()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = (int)$_REQUEST['id'];
            $introduces = $this->Introduce->getIntroduce($id);
            include 'src/admin/view/introduce/update.php';
        } else {
            $id = $_POST['id'];
            $content = $_POST['username'];
            $this->Introduce->updateIntroduce($id, $content);
            include 'src/admin/view/introduce/index.php';
        }
    }

    public function deleteIntroduce()
    {
        $id = $_REQUEST['id'];
        $this->Introduce->deleteIntroduce($id);
        $this->Introduce();

    }

}
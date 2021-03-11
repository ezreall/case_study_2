<?php

use App\Admin\Controller\ArticleController;
use App\Admin\Controller\CategoryController;
use App\Admin\Controller\CommentController;
use App\Admin\Controller\IntroduceController;

ob_start();
require __DIR__ . '/vendor/autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icons/">
    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Blog Thắng Ez</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="login.php">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link active" href="admin.php">
                            <span data-feather="home"></span>
                            Home Page <span class="sr-only"></span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=Category_admin">
                            <span data-feather="file"></span>
                            Chuyen Mục
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=Article_admin">
                            <span data-feather="book-open"></span>
                            Bài Viết
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=Comment_admin">
                            <span data-feather="message-square"></span>
                            Bình Luận
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=Introduce_admin">
                            <span data-feather="credit-card"></span>
                            Giới Thiệu
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <span data-feather="bar-chart-2"></span>
                            Thêm Mới
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="admin.php?page=addCategory">Chuyên Mục</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.php?page=addArticle">Bài Viết</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.php?page=addComment">Bình Luận</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.php?page=addIntroduce">Giới Thiệu</a>
                        </div>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

            </div>
        </nav>


    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>
<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$Article = new ArticleController();
$Category = new CategoryController();
$Comment = new CommentController();
$Introduce = new IntroduceController();
switch ($page) {
    case 'Category_admin':
        $Category->Category();
        break;
    case 'Article_admin':
        $Article->Article();
        break;
    case 'Comment_admin':
        $Comment->Comment();
        break;
    case'Introduce_admin':
        $Introduce->Introduce();
        break;
    case 'addArticle':
        $Article->addArticle();
        break;
    case 'deleteArticle':
        $Article->deleteArticle();
        break;
    case 'updateArticle':
        $Article->updateArticle();
        break;
    case 'searchArticle':
        $Article->searchArticle();
        break;
    case 'addCategory':
        $Category->addCategory();
        break;
    case 'updateCategory':
        $Category->updateCategory();
        break;
    case 'deleteCategory':
        $Category->deleteCategory();
        break;
    case 'searchCategory':
        $Category->searchCategory();
        break;
    case 'addComment':
        $Comment->addComment();
        break;
    case 'updateComment':
        $Comment->updateComment();
        break;
    case 'deleteComment':
        $Comment->deleteComment();
        break;
    case 'searchComment':
        $Comment->searchComment();
        break;
    case 'addIntroduce':
        $Introduce->addIntroduce();
        break;
    case 'updateIntroduce':
        $Introduce->updateIntroduce();
        break;
        case 'deleteIntroduce':
        $Introduce->deleteIntroduce();
        break;
}
ob_end_flush();
?>

</div>

</body>






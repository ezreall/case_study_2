<?php

use App\Admin\Model\Category;
use App\Admin\Model\Introduce;
use App\Model\UserArticle;
use App\Model\UserCategory;
ob_start();
require __DIR__ . '/vendor/autoload.php';
//$Introduce = new Introduce();
//$introduces = $Introduce->getALlIntroduce();
//$Category = new Category();
//$categories =$Category->getAllCategory();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Trang Chu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" >Chuyen Muc

                <select id="id" name="category_id">

                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['id']; ?>"> <?php echo $category['category_name']; ?>

                        </option>
                    <?php endforeach; ?>
                </select>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <img src="" alt="">
</nav>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"> Cách Sử Dụng Bootstrap Đẹp Như EM Ahihi </h1>

            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Có gì hay ho ở đây
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="modal-body">
                        <?php foreach ($introduces as $introduce):
                            ?>
                            <?php echo $introduce['content']; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <h2>Heading</h2>
                <p><a class="btn btn-secondary" href="" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div>

</main>

<footer class="container">
    <p></p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

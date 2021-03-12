<?php

use App\Admin\Model\Article;
use App\Admin\Model\Comment;
use App\Admin\Model\Category;
use App\Admin\Model\Introduce;
use App\Controller\UserArticleController;

ob_start();
require __DIR__ . '/vendor/autoload.php';
$Article = new Article();
$Articles = $Article->getAllArticle($id);
$Introduce = new Introduce();
$introduces = $Introduce->getALlIntroduce();
$Category = new Category();
$categories = $Category->getAllCategory();


$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$user = new UserArticleController();
switch ($page) {
    case 'list':
        $user->UserArticle();
        break;
}
?>

<!DOCTYPE html>
<html>
<title>BLogMVC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icons/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icons/">
<style>
    body, h1, h2, h3, h4, h5 {
        font-family: "Raleway", sans-serif
    }
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <h1><a href="index.php">MY BLOG</a></h1>
        <p>Welcome to the blog of <span class="w3-tag"> Thắng </span></p>
    </header>

    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <?php foreach ($Articles as $article): ?>

                    <img style="width: 100%" src="img/<?php echo $article['img']; ?>">
                    <div class="w3-container">
                        <h3><b> <?php echo $article['category_name']; ?></b></h3>
                        <h5><span class="w3-opacity"><?php echo $article['name_articles']; ?></span></h5>
                        <p> <?php echo $article['content']; ?></p>
                    </div>

                    <div class="w3-container">
                        <p></p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">

                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="list.php"
                                       role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Click Here
                                    </a> &raquo;
                                </p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span
                                                class="w3-tag">0</span></span></p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <hr>


        </div>

        <div class="w3-col l4">
            <!-- About Card -->
            <div class="w3-card w3-margin w3-margin-top">
                <img src="img/Screen Shot 2021-03-04 at 01.07.28.png" style="width:100%">
                <div class="w3-container w3-white">
                    <h4><b> <?php foreach ($introduces as $introduce): ?>
                                <?php echo $introduce['content']; ?>
                            <?php endforeach; ?></b></h4>
                    <p></p>
                </div>
            </div>
            <hr>

            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right"
                             style="width:50px">
                        <span class="w3-large">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                </ul>
            </div>
            <hr>

            <!-- Labels / tags -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                </div>
            </div>

            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div>
    <br>

    <!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next &raquo;</button>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>


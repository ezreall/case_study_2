<form class="form-inline my-2 my-lg-0"  method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name_articles">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<?php foreach ($articles as $article):?>
<div class="card" style="width: 70rem;margin-left: 10px">
    <div class="card-header">
       <h5> <?php echo $article['name_articles']; ?></h5>
    </div>
    <div class="card-body">
         <?php echo $article->id; ?>
        <div style="position: relative ;bottom:10px">
        <span style="padding-bottom: 10px"> Date <?php echo $articles['date']; ?></span></div>
        <p class="card-text"><?php echo $article['content']; ?></p>
        <img style="width: 100px" src="img/<?php echo $article['img']; ?>">
        <a style="font-size: 10px" href="admin.php?page=updateArticle&id=<?php echo $article['id']; ?>" class="btn btn-secondary">Update</a>
        <a style="font-size: 10px;" href="admin.php?page=deleteArticle&id=<?php echo $article['id'] ?> " class="btn btn-dark">Xoá </a>
    </div>
</div>
<?php endforeach; ?>

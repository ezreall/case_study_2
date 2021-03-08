
<?php foreach ($articles as $article):?>
<div class="card" style="width: 70rem;margin-left: 10px">
    <div class="card-header">
       <h5> <?php echo $article['name_articles']; ?></h5>
    </div>
    <div class="card-body">
         <?php echo $article->id; ?>
        <div style="position: relative ;bottom:10px">
        <span style="padding-bottom: 10px"> Date <?php echo $article['date']; ?></span></div>
        <p class="card-text"><?php echo $article['content']; ?></p>
        <img style="" src="<?php echo $article['img']; ?>">
        <a style="font-size: 10px" href="admin.php?page=updateArticle&id=<?php echo $article['id']; ?>" class="btn btn-secondary">Update</a>
        <a style="font-size: 10px;" href="admin.php?page=deleteArticle&id=<?php echo $article['id'] ?> " class="btn btn-dark">Xoá </a>
    </div>
</div>
<?php endforeach; ?>

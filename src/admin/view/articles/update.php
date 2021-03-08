<h2>Edit post</h2>

<form method="POST" action="admin.php?page=updateArticle">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>"/>

    <div class="form-group">
        <label>Ten Bai Viet</label>
        <input type="text" name="name_articles" value="<?php echo $article['name_articles']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngay Viet</label>
        <input type="date" name="date" value="<?php echo $article['date'];?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Noi Dung</label>
        <textarea  name="content" class="form-control"><?php echo $article['content']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Anh</label>
        <input type="file" name="img" value="<?php echo $article['img']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="admin.php?page=Article_admin" class="btn btn-default">Cancel</a>
    </div>
</form>


<form method="POST" action="admin.php?page=updateArticle" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>"/>
    <div class="card" style="width: 70rem;">
        <div class="card-body">
            <div class="form-group">
                <label>Ten Bai Viet</label>
                <input type="text" name="name_articles" value="<?php echo $article['name_articles']; ?>"
                       class="form-control"/>
            </div>
            <div class="form-group">
                <label>Ngay Viet</label>
                <input type="date" name="date" value="<?php echo $article['date']; ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Noi Dung</label>
                <textarea name="content" class="form-control"><?php echo $article['content']; ?></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="img"><img style="width:70px" src="img/<?php echo $article['img']; ?>" >
                    <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                    <input type="hidden" name="img" value="<?php echo $article['img']; ?>">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-outline-dark"/>
                <a href="admin.php?page=Article_admin" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>
    </div>
</form>

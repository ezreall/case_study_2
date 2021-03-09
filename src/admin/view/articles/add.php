
<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="card" style="width: 70rem;margin: 30px 80px">
    <div class="card-body">
<form method="post" action="admin.php?page=addArticle">
    <div class="form-group">
        <label>Tên Bài Viết</label>
        <input type="text" name="name_articles" class="form-control" />
    </div>
    <div class="form-group">
        <label>Ngày Viết</label>
        <input type="date" name="date" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Nội Dung</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="custom-file">
            <img src="img/<?php echo $article['img']; ?>" alt="">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="img">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-outline-dark"/>
        <a href="admin.php?page=Article_index" class="btn btn-outline-danger">Cancel</a>
    </div>

</form>
    </div>
</div>

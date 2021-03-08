
<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<form method="post" action="admin.php?page=addArticle">
    <div class="form-group">
        <label>Tên Bài Viết</label>
        <input type="text" name="name_articles" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngày Viết</label>
        <input type="date" name="date" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Nội Dung</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

        <div class="form-group">
            <label>Tên Bài Viết</label>
            <input type="file" name="img" class="form-control"/>
        </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="admin.php?page=Article_index" class="btn btn-default">Cancel</a>
    </div>
</form>
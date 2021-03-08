<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<form method="post" action="admin.php?page=addComment">
    <div class="form-group">
        <label>Nội Dung</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Tên Người Dùng</label>
        <input type="text" name="username" class="form-control"/>

    </div>
    <div class="form-group">
        <label>Ngày Bình Luận</label>
        <input type="date" name="date" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php?page=comment_index" class="btn btn-default">Cancel</a>
    </div>
</form>
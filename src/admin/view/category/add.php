<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="card" style="width: 60rem;margin-left: 250px">
<form method="post" action="admin.php?page=addCategory">
    <div class="form-group">
        <label>Tên Bài Viết</label>
        <input type="text" name="category_name" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="admin.php?page=Category_admin" class="btn btn-default">Cancel</a>
    </div>
</form>
</div>
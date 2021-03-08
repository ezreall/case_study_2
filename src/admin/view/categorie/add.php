<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<form method="post" action="admin.php?page=addCategorie">
    <div class="form-group">
        <label>Tên Bài Viết</label>
        <input type="text" name="categorie_name" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="admin.php?page=Categorie_admin" class="btn btn-default">Cancel</a>
    </div>
</form>
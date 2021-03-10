<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="card" style="width: 70rem;margin-left: 250px">
<form method="post" action="admin.php?page=addIntroduce">
    <div class="form-group">
        <label>Nội Dung</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="admin.php?page=Comment_admin" class="btn btn-default">Cancel</a>
    </div>
</form>
</div>
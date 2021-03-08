<h2>Edit post</h2>

<form method="POST" action="admin.php?page=updateComment">

    <input type="hidden" name="id" value="<?php echo $comments['id']; ?>"/>

    <div class="form-group">
        <label>Ten Bai Viet</label>
        <input type="text" name="content" value="<?php echo $comments['content']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngay Viet</label>
        <input type="text" name="username" value="<?php echo $comments['username'];?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Ngay Viet</label>
        <input type="date" name="date" value="<?php echo $comments['date'];?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="admin.php?page=Article_admin" class="btn btn-default">Cancel</a>
    </div>
</form>
<h2>Edit post</h2>
<form method="POST" action="admin.php?page=updateCategory">
    <div class="card" style="width: 60rem; margin-left: 250px">

    <input type="hidden" name="id" value="<?php echo $categories['id']; ?>"/>
    <div class="form-group">
        <label>Ten Bai Viet</label>
        <input type="text" name="category_name" value="<?php echo $categories['category_name']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="admin.php?page=Category_admin" class="btn btn-default">Cancel</a>
    </div>
    </div>
</form>
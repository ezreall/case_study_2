<h2>Edit post</h2>
<form method="POST" action="admin.php?page=updateIntroduce">
    <div class="card" style="width: 60rem; margin-left: 250px">

        <input type="hidden" name="content" value="<?php echo $introduce['id']; ?>"/>

        <div class="form-group">
            <div class="form-group">
                <label>Ten Bai Viet</label>
                <input type="text" name="content" value="<?php echo $introduce['content']; ?>" class="form-control"/>
            </div>
            <input type="submit" value="Update" class="btn btn-primary"/>
            <a href="admin.php?page=Introduce_admin" class="btn btn-default">Cancel</a>
        </div>
    </div>
</form>
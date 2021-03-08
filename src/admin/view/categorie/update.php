<h2>Edit post</h2>
<form method="POST" action="admin.php?page=updateCategorie">
    <input type="hidden" name="id" value="<?php echo $categories['id']; ?>"/>
     <?php
     var_dump($categorie);?>
    <div class="form-group">
        <label>Ten Bai Viet</label>
        <input type="text" name="categorie_name" value="<?php echo $categories['categorie_name']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="admin.php?page=Categorie_admin" class="btn btn-default">Cancel</a>
    </div>
</form>
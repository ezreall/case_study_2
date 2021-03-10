<nav class="navbar navbar-light bg-light">
    <form class="form-inline " method="post">
        <div style="margin-left: 1060px">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="categorie_name">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</nav>
<?php foreach ($categories as $categorie): ?>

    <div class="card" style="width: 70rem;margin-left:250px">
        <div class="card-header">
            <?php echo $categorie['categorie_name']; ?></h2>
        </div>
        <div class="card-body">
            <?php echo $categorie->id; ?>
            <div style="position: relative ;bottom:10px">
                <a style="font-size: 10px" href="admin.php?page=updateCategorie&id=<?php echo $categorie['id']; ?>"
                   class="btn btn-secondary">Update</a>
                <a style="font-size: 10px;" href="admin.php?page=deleteCategorie&id=<?php echo $categorie['id'] ?> "
                   class="btn btn-dark">Xoá </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

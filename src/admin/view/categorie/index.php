<?php foreach ($categories as $categorie): ?>
    <div class="card" style="width: 70rem;margin-left: 10px">
        <div class="card-header">
            <?php echo $categorie['categorie_name']; ?></h2>
        </div>
        <div class="card-body">
            <?php echo $categorie->id; ?>
            <div style="position: relative ;bottom:10px">
                <a style="font-size: 10px" href="admin.php?page=updateCategorie&id=<?php echo $categorie['id']; ?>"
                   class="btn btn-secondary">Update</a>
                <a style="font-size: 10px;" href="admin.php?page=deleteCartegorie&id=<?php echo $categorie['id'] ?> "
                   class="btn btn-dark">Xoá </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

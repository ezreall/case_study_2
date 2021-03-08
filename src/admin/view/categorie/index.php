
<ul>
    <?php foreach ($categories as $categorie): ?>
        <li>
            <h2><?php echo $categorie->id; ?>
                    <?php echo $categorie['categorie_name']; ?></h2>
            <a href="admin.php?page=updateCategorie&id=<?php echo $categorie['id']; ?>
" class="btn btn-primary btn-sm">Update</a>
            <button onclick="return confirm('Bạn có muốn xoá <?php echo $categorie['categorie_name'] ?> không ')">
            <a href="admin.php?page=deleteCartegorie&id=<?php echo $categorie['id']; ?>" class="btn btn-warning btn-sm">Delete</a>
        </li>

    <?php endforeach; ?>

</ul>
<nav class="navbar navbar-light bg-light">
    <form class="form-inline " method="post">
        <div style="margin-left: 950px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="content">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<?php foreach ($introduces as $introduce):
    ?>
    <div class="card" style="width: 60rem;margin-left:250px">
        <div class="card-header">
        </div>
        <div class="card-body">
        <h2> <?php echo $introduce['content']; ?></h2>

            <div style="position: relative ;bottom:10px">
                <a style="font-size: 10px" href="admin.php?page=updateIntroduce&id=<?php echo $introduce['id']; ?>"
                   class="btn btn-secondary">Update</a>
                <a style="font-size: 10px;" href="admin.php?page=deleteIntroduce&id=<?php echo $introduce['id']; ?> "
                   class="btn btn-dark">Xoá </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

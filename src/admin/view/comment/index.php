<form class="form-inline my-2 my-lg-0"  method="post">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="username">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<?php foreach ($comments as $comment):?>
    <div class="card" style="width: 70rem;margin-left: 10px">
        <div class="card-header">
            <h5> <?php echo $comment['content']; ?></h5>
        </div>
        <div class="card-body">

            <div style="position: relative ;bottom:10px">
                <span style="padding-bottom: 10px"> <?php echo $comment['username']; ?></span></div>
            <p class="card-text"> <?php echo $comment['date']; ?></p>
            <a style="font-size: 10px" href="admin.php?page=updateComment&id=<?php echo $comment['id']; ?>" class="btn btn-secondary">Update</a>
            <a style="font-size: 10px" href="admin.php?page=deleteComment&id=<?php echo $comment['id']; ?>" class="btn btn-dark">Xoá </a>
        </div>
    </div>
<?php endforeach; ?>
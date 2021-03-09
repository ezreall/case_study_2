
<ul>
    <?php foreach ($comments as $comment): ?>
        <li>
            <h2><a href="admin.php?page=view&id=<?php echo $comment['id']; ?>">
                    <?php echo $comment['content']; ?></a></h2>
            <p><?php echo $comment['username']; ?></p>
            <span>Date <?php echo $comment['date']; ?></span><br>
            <a href="admin.php?page=updateComment&id=<?php echo $comment['id']; ?>" class="btn btn-primary btn-sm">Update</a>
            <a href="admin.php?page=deleteComment&id=<?php echo $comment['id']; ?>" class="btn btn-warning btn-sm">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
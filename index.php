<?php
include ('./includes/class-autoload.inc.php');
require_once('./templates/header.php');




?>

<!-- Button trigger modal -->
<div class="text-center">
    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#addPostModal">
        Create post
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form input -->

                <form action="post.process.php" method="POST">
                    <div class="form-group">
                        <label>Title:</label>
                        <input class="form-control" name="post-title" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Conten:</label>
                        <textarea class="form-control" name="post-content" type="text" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Autor:</label>
                        <input class="form-control" name="post-author" type="text" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <?php $posts=new Posts(); ?>
    <?php if($posts->getPosts()) : ?>
        <?php foreach($posts->getPosts() as $post) : ?>
            <div class="col-md-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-text"><?= $post['title'] ?></h5>
                <p class="card-text"><?= $post['body'] ?>
                </p>
                <h6 class="card-subtitle text-muted text-right">Autor:<?= $post['author'] ?></h6>
                <a href="editForm.php?id=<?= $post['id'] ?>" class="btn btn-warning">Edit</a>
                <a href="post.process.php?id=<?= $post['id']?>&send=del" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>

            <?php endforeach; ?>
            <?php else :?>
                <p class="text-center mt-5">post is empty...</p>
                <?php endif ?>
</div>

<?php
require_once('templates/footer.php');
?>
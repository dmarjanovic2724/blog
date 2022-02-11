<?php
require_once('./templates/header.php');
include("./includes/class-autoload.inc.php");
$posts= new Posts();
$post= $posts->editPost($_GET['id']);
print_r($post);
?>

<div class="text-center my-4">
    <h3>Edit Post</h3>
</div>

<div class="row">
    <div class="col-md-7 mx-auto">
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

                <a href="index.php" type="button" class="btn btn-secondary">Close</a>
                <button type="submit" name="submit" class="btn btn-primary">Update post</button>
            
        </form>
    </div>
</div>


<?php
require_once('./templates/footer.php');
?>
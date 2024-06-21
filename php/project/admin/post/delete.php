<?php
include '../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = getPostById($id);

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        deletePost($id);
        header('location: /php/project/admin/post/');
    } elseif (isset($_GET['confirm']) && $_GET['confirm'] === 'no') {
        header('location: /php/project/admin/post/');
    }
}

echo "<div class='container mt-5'> <h1>Delete News</h1>";
?>
<br>
<a href="delete.php?id=<?=$id?>&confirm=yes" class="btn btn-danger">Yes</a>
<a href="delete.php?id=<?=$id?>&confirm=no" class="btn btn-primary">No</a>
</div>
<?php
include '../../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = getTagById($id);

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        deleteTag($id);
        header('location: /php/project/admin/tag/');
    } elseif (isset($_GET['confirm']) && $_GET['confirm'] === 'no') {
        header('location: /php/project/admin/tag/');
    }
}

echo "<div class='container mt-5'> <h1>Delete Tag</h1>";
?>
<br>
<a href="delete.php?id=<?=$id?>&confirm=yes" class="btn btn-danger">Yes</a>
<a href="delete.php?id=<?=$id?>&confirm=no" class="btn btn-primary">No</a>
</div>
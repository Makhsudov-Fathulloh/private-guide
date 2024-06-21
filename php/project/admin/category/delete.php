<?php
include '../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = getCategoryById($id);

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        deleteCategory($id);
        header('location: /php/project/admin/category/');
    } elseif (isset($_GET['confirm']) && $_GET['confirm'] === 'no') {
        header('location: /php/project/admin/category/');
    }
}

echo "<div class='container mt-5'> <h1>Delete Category</h1>";
?>
<br>
<a href="delete.php?id=<?=$id?>&confirm=yes" class="btn btn-danger">Yes</a>
<a href="delete.php?id=<?=$id?>&confirm=no" class="btn btn-primary">No</a>
</div>
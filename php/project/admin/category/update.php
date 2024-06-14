<?php
include '../../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = getCategoryById($id);
}

if (isset($_POST['update'])) {
    // todo
    $title = $_POST['title'];
    updateCategory($id, $title);
    header('Location: /php/project/admin/category/'); exit;
}
?>

    <div class="container">
        <h2 class="mt-3">Update news</h2>
        <div class="row">
            <form method="post">
                <div class="mb-3 mt-4">
                    <label for="category-name" class="form-label">Category name</label>
                    <input type="text" class="form-control" id="category-name" name="title" value="<?= $category['title'] ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>

<?php
include '../../footer.php';
?>
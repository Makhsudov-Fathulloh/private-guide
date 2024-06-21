<?php
include '../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tag = getTagById($id);
}

if (isset($_POST['update'])) {
    // todo
    $name = $_POST['name'];
    updateTag($id, $name);
    header('Location: /php/project/admin/tag/'); exit;
}
?>

    <div class="container">
        <h2 class="mt-3">Update news</h2>
        <div class="row">
            <form method="post">
                <div class="mb-3 mt-4">
                    <label for="tag-name" class="form-label">Tag name</label>
                    <input type="text" class="form-control" id="tag-name" name="name" value="<?= $tag['name'] ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>

<?php
include '../../footer.php';
?>
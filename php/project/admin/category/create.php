<?php
include '../../header.php';
include 'db_helper.php';

if (isset($_POST['create'])) {
    // todo
    $title = $_POST['title'];
    addCategory($title);
    header('Location: /php/project/admin/category/');
}
?>

    <div class="container">
        <div class="row">
            <form method="post">
                <div class="mb-3 mt-5">
                    <label for="category-name" class="form-label">Category name</label>
                    <input type="text" class="form-control" id="category-name" name="title">
                </div>
                <button type="submit" name="create" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>

<?php
include '../../footer.php';
?>
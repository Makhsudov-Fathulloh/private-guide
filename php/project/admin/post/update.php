<?php
include '../header.php';
include '../db_helper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = getPostById($id);
}

if (isset($_POST['update'])) {
    // todo
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $author_id = $_POST['author_id'];
    updatePost($id, $title, $content, $category_id, $author_id);
    header('Location: /php/project/admin/post/'); exit;
}

$categoryList = getCategoryList(1, true);
$authorList = getUserList();
?>

    <div class="container">
        <h2 class="mt-3">Update news</h2>
        <div class="row">
            <form method="post">
                <div class="mb-3 mt-4">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'] ?>">
                </div>
                <div class="mb-3 mt-5">
                    <label for="content" class="form-label">content</label>
                    <input type="text" class="form-control" id="content" name="content" value="<?= $post['content'] ?>">
                </div>
                <div class="mb-3 mt-5">
                    <label for="category_id" class="form-label">category_id</label>
                    <select class="form-select" name="category_id">
                        <?php foreach ($categoryList as $item) {
                            echo "<option value='" . $item['id'] . "'>" . $item['title'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 mt-5">
                    <label for="author_id" class="form-label">author_id</label>
                    <select class="form-select" name="author_id">
                        <?php foreach ($authorList as $item) {
                            echo "<option value='" . $item['id'] . "'>" . $item['firsname'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" name="update" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>

<?php
include '../../footer.php';
?>
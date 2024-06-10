<?php
include '../header.php';
include '../dbconnect.php';

if (isset($_POST['addCategory'])) {
    // todo
    $title = $_POST['title'];
    $sql_insert = "INSERT INTO category (title) VALUES (:title)";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":title", $title);
    $state->execute();
//    $state->errorInfo(); die();

    header('Location: /php/project/admin/category.php');
}
?>

    <div class="container">
        <div class="row">
            <form method="post">
                <div class="mb-3 mt-5">
                    <label for="category-name" class="form-label">Category name</label>
                    <input type="text" class="form-control" id="category-name" name="title">
                </div>
                <button type="submit" name="addCategory" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>

<?php
include '../footer.php';
?>
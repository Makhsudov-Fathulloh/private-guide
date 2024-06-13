<?php
include '../../header.php';
include '../../dbconnect.php';
include 'db_helper.php';
?>

    <div class="container">
        <h1>Assalamu alaykum!</h1>
        <p>This is admin category page</p>

        <a href="create.php" class="btn btn-success">Add category</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (getCategoryList() as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['title'] . "</td>";
                echo "<td><a href='update.php?id=".$item['id']."' class='btn btn-primary'>Update</a>
                          <a href='delete.php?id=".$item['id']."' class='btn btn-danger'>Delete</a></tr>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>

<?php include '../footer.php'; ?>
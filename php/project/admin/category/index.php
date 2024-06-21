<?php
include '../header.php';
include '../../dbconnect.php';
include '../db_helper.php';


//if (!isset($_SESSION["logged"])) {
//    header("location: /php/project/admin/login/login.php");
//}


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
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
            <?php foreach (getCategoryList($page) as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['title'] . "</td>";
                echo "<td><a href='update.php?id=" . $item['id'] . "' class='btn btn-primary'>Update</a>
                          <a href='delete.php?id=" . $item['id'] . "' class='btn btn-danger'>Delete</a></tr>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($page = 1; $page <= getPaginationCategory(); $page++) { ?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?page=<?=$page?>"><?=$page?></a>
                    </li>
                <?php } ?>

                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

<?php include '../footer.php'; ?>
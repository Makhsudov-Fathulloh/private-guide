<?php
include '../header.php';
include '../../dbconnect.php';
include '../db_helper.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
?>

    <div class="container">
        <h1>Assalamu alaykum!</h1>
        <p>This is admin news page</p>

        <a href="create.php" class="btn btn-success">Add news</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">category_id</th>
                <th scope="col">author_id</th>
                <th scope="col">visition_count</th>
                <th scope="col">created_at</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (getPostList($page) as $item) {
                $category = getCategoryById($item['category_id']);
                $author = getAuthor($item['author_id']);
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['title'] . "</td>";
                echo "<td>" . $item['content'] . "</td>";
                echo "<td>" . $category['title'] . "</td>";
                echo "<td>" . $author['firsname'] . "</td>";
                echo "<td>" . $item['visition_count'] . "</td>";
                echo "<td>" . $item['created_at'] . "</td>";

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

                <?php for ($page = 1; $page <= getPaginationPost(); $page++) { ?>
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
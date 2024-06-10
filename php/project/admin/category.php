<?php
include '../header.php';
include '../dbconnect.php';

$sql = "SELECT * FROM category";
$state = $conn->prepare($sql);
$state->execute();
$result = $state->fetchAll(PDO::FETCH_ASSOC);

//echo "<pre>";
//print_r($result);
?>

    <div class="container">
        <h1>Assalamu alaykum!</h1>
        <p>This is admin category page</p>

        <a href="/php/project/admin/addCategory.php" class="btn btn-success">Add category</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['title'] . "</td>";
            } ?>
            </tbody>
        </table>
    </div>
<?php include '../footer.php'; ?>
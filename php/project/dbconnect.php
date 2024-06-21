<?php

$servername = "localhost";
$db_username = "root";
$db_password = "a123456A!";
$db_name = "project_news";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
    // echo "Database ulandi";
} catch ( PDOException $e ) {
    echo "Database ulanmadi: " . $e->getMessage();
}

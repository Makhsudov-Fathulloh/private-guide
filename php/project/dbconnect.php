<?php

$servername = "localhost";
$username = "root";
$password = "a123456A!";
$dbname = "project_news";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // echo "Database ulandi";
} catch ( PDOException $e ) {
    echo "Database ulanmadi: " . $e->getMessage();
}

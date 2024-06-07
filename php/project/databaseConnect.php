<?php

$servername = "lacalhost";
$username = "root";
$password = "a123456A!";
$dbname = "project_news";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // echo "Database ulandi";
} catch ( PDOException $e ) {
    echo "Database ulanmadi: " . $e->getMessage();
}

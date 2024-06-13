<?php

function getCategoryList() {
    include '../../dbconnect.php';
    $sql = "SELECT * FROM category;";
    $state = $conn->prepare($sql);
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function  addCategory($title) {
    include '../../dbconnect.php';
    $sql_insert = "INSERT INTO category (title) VALUES (:title)";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":title", $title);
    $state->execute();
}

function getCategoryById($id) {
    include '../../dbconnect.php';
    $sql = "SELECT * FROM category WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->execute();
    return $state->fetch(PDO::FETCH_ASSOC);
}

function updateCategory($id, $title) {
    include '../../dbconnect.php';
    $sql = "UPDATE category SET title = :title WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->bindValue(":title", $title);
    $state->execute();
}

function deleteCategory($id) {
    include '../../dbconnect.php';
    $sql = "DELETE FROM category WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->execute();
}




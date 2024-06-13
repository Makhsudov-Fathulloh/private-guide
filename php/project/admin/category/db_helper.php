<?php

function getCategoryList($page) {
    include '../../dbconnect.php';
    $limit = 5;
//    $page = 1;
    $offset = ($page - 1) * $limit;

    $sql = "SELECT * FROM category LIMIT :offset, :limit;";
    $state = $conn->prepare($sql);
    $state->bindValue(':limit', $limit, PDO::PARAM_INT);
    $state->bindValue(':offset', $offset, PDO::PARAM_INT);
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//function getCategoryList() {
//    include '../../dbconnect.php';
//    $limit = 5;
//    $sql = "SELECT * FROM category LIMIT :limit";
//    $state = $conn->prepare($sql);
//    $state->bindValue(':limit', $limit, PDO::PARAM_INT);
//    $state->execute();
//    $result = $state->fetchAll(PDO::FETCH_ASSOC);
//    return $result;
//}

//function getCategoryList() {
//    include '../../dbconnect.php';
//    $sql = "SELECT * FROM category;";
//    $state = $conn->prepare($sql);
//    $state->execute();
//    $result = $state->fetchAll(PDO::FETCH_ASSOC);
//    return $result;
//}

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

function  getPagination() {
    include '../../dbconnect.php';
    $limit = 5;
    $sql = "SELECT * FROM category;";
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows / $limit);
}



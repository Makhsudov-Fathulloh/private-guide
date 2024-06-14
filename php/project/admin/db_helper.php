<?php
function getCategoryList($page, $withoutLimit = false) {
    include '../../dbconnect.php';
    $limit = 5;
//    $page = 1;
    $offset = ($page - 1) * $limit;

    if ($withoutLimit) {
        $sql = "SELECT * FROM category";
        $state = $conn->prepare($sql);
    } else {
        $sql = "SELECT * FROM category LIMIT :offset, :limit;";
        $state = $conn->prepare($sql);
        $state->bindValue(':limit', $limit, PDO::PARAM_INT);
        $state->bindValue(':offset', $offset, PDO::PARAM_INT);
    }
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

function addCategory($title) {
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

function  getPaginationCategory() {
    include '../../dbconnect.php';
    $limit = 5;
    $sql = "SELECT * FROM category;";
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows / $limit);
}

//function  getPagination($tableName) {
//    include '../dbconnect.php';
//    $limit = 5;
//    $sql = "SELECT * FROM " . $tableName;
//    $state = $conn->prepare($sql);
//    $state->execute();
//    $total_rows = $state->rowCount();
//    return ceil($total_rows / $limit);
//}


// ------- Post functions -------
function getPostList($page) {
    include '../../dbconnect.php';
    $limit = 5;
//    $page = 1;
    $offset = ($page - 1) * $limit;

    $sql = "SELECT * FROM post LIMIT :offset, :limit;";
    $state = $conn->prepare($sql);
    $state->bindValue(':limit', $limit, PDO::PARAM_INT);
    $state->bindValue(':offset', $offset, PDO::PARAM_INT);
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserList() {
    include '../../dbconnect.php';
    $sql = "SELECT * FROM user;";
    $state = $conn->prepare($sql);
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function  addPost($title, $content, $author_id, $category_id) {
    include '../../dbconnect.php';
    $sql_insert = "INSERT INTO post (title, content, author_id, category_id, visition_count, created_at) 
    VALUES (:title, :content, :category_id, :author_id, :visition_count, :created_at);";
    $state = $conn->prepare($sql_insert);
    $state->bindValue(":title", $title);
    $state->bindValue(":content", $content);
    $state->bindValue(":category_id", $category_id);
    $state->bindValue(":author_id", $author_id);
    $state->bindValue(":visition_count", 0);
    $state->bindValue(":created_at", date("Y-m-d H:i:s"));
    $state->execute();
}

function getPostById($id) {
    include '../../dbconnect.php';
    $sql = "SELECT * FROM post WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->execute();
    return $state->fetch(PDO::FETCH_ASSOC);
}

function getAuthor($id) {
    include '../../dbconnect.php';
    $sql = "SELECT * FROM user WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->execute();
    return $state->fetch(PDO::FETCH_ASSOC);
}

function updatePost($id, $title, $content, $category_id, $author_id) {
    include '../../dbconnect.php';
    $sql = "UPDATE post 
            SET title = :title, 
                content = :content, 
                category_id = :category_id, 
                author_id = :author_id, 
                created_at = :created_at 
            WHERE id = :id";

    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->bindValue(":title", $title);
    $state->bindValue(":content", $content);
    $state->bindValue(":category_id", $category_id);
    $state->bindValue(":author_id", $author_id);
    $state->bindValue(":created_at", date("Y-m-d H:i:s"));
    $state->execute();
//    var_dump($state->errorInfo());die();
}

function deletePost($id) {
    include '../../dbconnect.php';
    $sql = "DELETE FROM post WHERE id = :id";
    $state = $conn->prepare($sql);
    $state->bindValue(":id", $id, PDO::PARAM_INT);
    $state->execute();
}

function  getPaginationPost() {
    include '../../dbconnect.php';
    $limit = 5;
    $sql = "SELECT * FROM post;";
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows / $limit);
}

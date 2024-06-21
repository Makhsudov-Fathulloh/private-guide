<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include "../../dbconnect.php";
    $state = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $state->bindValue(":username", $username);
    $state->execute();

    if ($state->rowCount() > 0) {
        $user = $state->fetch();
        if (password_verify($password, $user['password'])) {
            $_SESSION['success'] = "You are now logged in: ";
            $_SESSION['logged'] = 1;
            header('Location: ../index.php');  exit();
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['error'] = "Wrong password";
        }
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['error'] = "Wrong username";
    }
}

header('Location: login.php');
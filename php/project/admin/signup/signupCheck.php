<?php
session_start();

if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];
    if ($password != $confirm_password) {
        $_SESSION['error'] = "Passwords do not match";
    } else {
//        die();
        include '../../dbconnect.php';
        $state = $conn->prepare("SELECT * FROM user WHERE username = :username");
        $state->bindValue(":username", $username);
        $state->execute();
        if ($state->rowCount() > 0) {
            $_SESSION['error'] = "Username already exists";
        } else {
            $role = "author";
            $password = password_hash($password, PASSWORD_DEFAULT);
            $state = $conn->prepare("INSERT 
                INTO user (username, password, firsname, lastname, role) 
                VALUES (:username, :password, :firsname, :lastname, :role)");

            try {
                $state->execute([
                    "username" => $username,
                    "password" => $password,
                    "firsname" => $firstname,
                    "lastname" => $lastname,
                    "role" => $role
                ]);
                $_SESSION['success'] = "Account created";
            } catch (PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
            }
        }
    }
} else {
    $_SESSION['error'] = "All fields are required";
}

header('location: signup.php');

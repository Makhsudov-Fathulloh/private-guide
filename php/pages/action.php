<?php
declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

//echo 'Ваша имя ' . $_GET['name'] . '<br>' . 'Ваша возраст ' . $_GET['phone'] . 'Ваш пол ' . $_GET['gender'] . $_POST['password'];
//echo 'Ваша имя ' . $_POST['name'] . '<br>' . 'Ваша возраст ' . $_POST['phone'] . 'Ваш пол ' . $_GET['gender'] . $_POST['password'];
//echo 'Ваша имя ' . $_REQUEST['name'] . '<br>' . 'Ваша возраст ' . $_REQUEST['phone'] . 'Ваш пол ' . $_GET['gender'] . $_POST['password'];

if (isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['gender']) && !empty($_POST['gender']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    if (strlen($name) < 3 || strlen($password) < 8) {
        echo 'error - name 6 va password 8 xonadan kam bolmasligi kerak' . '<br>';
    }
    if ($phone[0] != '+') {
        echo 'error - telefon format emas' . '<br>';
    }
    if (substr($phone, 1, 3) != '999') {
        echo 'error - 998 format emas' . '<br>';
    }
    if (strlen($phone) != 13 || !is_numeric(substr($phone, 1))) {
        echo 'error';
    }
}







<?php
declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

$upload_folder = "images/";

if (isset($_FILES['image'])) {
    if (!is_dir($upload_folder))
        mkdir($upload_folder);

    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_format_arr = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_format_arr));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "The file extension ".$file_ext." is not allowed.";
    }

    if ($file_size > 2097152) {
        $errors[] = "The file size must be excately 2 MB.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $upload_folder . $file_name);
        echo "file loaded.";
    } else {
        print_r($errors);
    }
}






<?php
session_start();

if(isset($_SESSION['logged'])){
    unset($_SESSION['success']);
    unset($_SESSION['logged']);
}
header('Location: /php/project/user');



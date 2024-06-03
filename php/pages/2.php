<?php

declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/css/style.css">
    <link rel="stylesheet" href="/php/css/main.css">

    <title>Form and Function, Variable types</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/php/index.php">PhP</a></b></li>
    </ul>

<!--    --><?php
//    if (isset($_POST['name']) && !empty($_POST['name']) &&
//        isset($_POST['phone']) && !empty($_POST['phone']) &&
//        isset($_POST['gender']) && !empty($_POST['gender']) &&
//        isset($_POST['password']) && !empty($_POST['password'])
//    ) {
//        $name = $_POST['name'];
//        $phone = $_POST['phone'];
//        $gender = $_POST['gender'];
//        $password = $_POST['password'];
//
//        if (strlen($name) < 4 || strlen($password) < 8) {
//            echo 'error - name 6 va password 8 xonadan kam bolmasligi kerak' . '<br>';
//        }
//        if ($phone[0] != '+') {
//            echo 'error - telefon format emas' . '<br>';
//        }
//        if (substr($phone, 1, 3) != '998') {
//            echo 'error - 998 format emas' . '<br>';
//        }
//        if (strlen($phone) != 13 || !is_numeric(substr($phone, 1))) {
//            echo 'error';
//        }
//    }
//    ?>

    <ul>
        <li><b class="topic">Form</b> - foydalanuvchidan malumot olish va serverga malumot yuborish uchun ishlatiladi.
        </li>
        <br>
        <form action="/php/pages/action.php" method="POST">
            <label for="name">Ваше имя:</label>
            <input name="name" id="name" type="text">

            <label for="phone">Ваш телефон:</label>
            <input name="phone" id="phone" type="tel">

            <label for="radio">Ваш пол:</label>
            <label for="male">М/M:</label>
            <input name="gender" id="male" type="radio" value="male">
            <label for="female">Ж/F:</label>
            <input name="gender" id="female" type="radio" value="female">
            <br>

            <label for="password">Ваш пароль:</label>
            <input name="password" id="password" type="password">

            <button type="submit">Submit</button>
        </form><br><br>

        <li><b class="topic">Function</b> - dasturni xoxlaganimizcha qayta ishlatish imkonini beruvchi code block. 
        qachonchi chaqirilganda avtomatik ishka tushadi.</li>
        <h3>Agar functionda return bolsa, functionni biror o'zgaruvchiga olinadi.</h3>
        <h3>Agar function argumentli bolsa, argumentga boshlangich qiymat va argument typeni berishimiz mumkun. 
            Argumentga boshlangich qiymat berilganda iloji bolsa argumentga berilgan o'zgaruvchini oxirida yozgan yaxshi.</h3>

        <li><b class="topic">Recursive function</b> - function ichida yana o'sha functionni chaqirish.</li>
        <img src="/php/img/2/functions.png" alt=""> <br><br><br>

        <h2 class="topic">Vareables types.</h2>
        <img src="/php/img/2/local.png" alt=""> <br><br><br>
        <img src="/php/img/2/global.png" alt=""> <br><br><br>
        <img src="/php/img/2/static.png" alt=""> <br><br><br><br>
        
        <img src="/php/img/" alt=""> <br><br><br>
    </ul>
</div>

</body>
</html>

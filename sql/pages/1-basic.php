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

    <title>Introduction to SQL</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <p>
            <b><a href="https://www.w3schools.com/sql/sql_datatypes.asp">SQL (Structured Query Language)</a></b> -
            relyatsion ma'lumotlar bazalarini boshqarish va
            manipulyatsiya qilish uchun ishlatiladigan standart dasturlash tili. U ma'lumotlarni so'rash, ma'lumotlarni
            yangilash va ma'lumotlar bazasi sxemalarini
            aniqlash kabi vazifalarni bajarish uchun ishlatiladi.
        </p>
        <p>
            SQL ma'lumotlar bazalari bilan aloqa qilish uchun ishlatiladi va odatda MySQL, PostgreSQL, Oracle va SQL
            Server kabi ma'lumotlar bazasini boshqarish tizimlarida qo'llaniladi.
            U ma’lumotlar bazalarida turli amallarni bajarish uchun SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, DROP
            kabi turli buyruqlardan iborat.
            SQL so'rovlari deklarativ tilda yoziladi, ya'ni siz qanday ma'lumotlarni olishni yoki qanday qilishni emas,
            balki qanday ma'lumotlarni o'zgartirishni xohlayotganingizni belgilaysiz.
            SQL ma'lumotlarni tahlil qilish, ma'lumotlarni saqlash va biznes razvedka dasturlari uchun zarurdir.
            Bu erda SQL haqida ko'proq ma'lumot olish uchun foydali havolalar mavjud: <br>

            W3Schools SQL darsligi: https://www.w3schools.com/sql/
            SQLZoo: https://sqlzoo.net/
            Codecademy-da SQL: https://www.codecademy.com/learn/learn-sql
            Coursera-da Data Science uchun SQL: https://www.coursera.org/learn/sql-data-science
        </p>

        <img src="/sql/img/1/database-1.png" alt=""> <br><br><br>
        <img src="/sql/img/1/database-2.png" alt=""> <br><br><br>

        <img src="/sql/img/1/SQL-1.png" alt=""> <br><br><br>
        <img src="/sql/img/1/SQL-2.png" alt=""> <br><br><br>
        <img src="/sql/img/1/SQL-3.png" alt=""> <br><br><br>
        <img src="/sql/img/1/SQL-4.png" alt=""> <br><br><br>
        <img src="/sql/img/1/SQL-5.png" alt=""> <br><br><br>

        <img src="/sql/img/1/CREATE_DATABASE-1.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-2.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-3.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-4.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-5.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-6.png" alt=""> <br><br><br>
        <img src="/sql/img/1/CREATE_DATABASE-7.png" alt=""> <br><br><br>

        <h1>Data types:</h1>
        <img src="/sql/img/1/data_types-1.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-2.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-3.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-4.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-5.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-6.png" alt=""> <br><br><br>
        <img src="/sql/img/1/data_types-7.png" alt=""> <br><br><br>

        <li><b class="topic">Import SQL file</b> - <b>mysql -u root -p</b> > <b>kerakli database yaratish</b> >
            <b>exit;</b>,
            <b>mysql -u root -p databaseName < SQL_fileName.sql</b></li>
        <br>
        <img src="/sql/img/1/MAMP-1.png" alt=""> <br><br><br>
        <img src="/sql/img/1/MAMP-2.png" alt=""> <br><br><br>

        <h3>Homework</h3>
        <img src="/sql/img/1/1.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">

                $servername = "localhost";
                $username = "root";
                $password = "a123456A!";
                $dbname = "php_yii2";

                // MySQLga ulanishni
                $connect = new mysqli($servername, $username, $password, $dbname);
                //$connect = mysqli_connect('localhost','root', 'a123456A!','php_yii2');

                // Ulanishni tekshirish
                if (!$connect) {
                    echo 'Error connect';
                }

                // 2 vazifa
                $user = "CREATE TABLE user (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50) NOT NULL,
                password VARCHAR(32) NOT NULL,
                status INT(50) DEFAULT 1,
                created_date TIMESTAMP
                )";

                // 3 vazifa
                $sciences = "CREATE TABLE fanlar (
                id INT AUTO_INCREMENT PRIMARY KEY,
                science_name VARCHAR(255) NOT NULL,
                status INT(50) DEFAULT 1,
                created_date TIMESTAMP
                )";

                $teachers = "CREATE TABLE ustozlar (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(50) NOT NULL,
                lastname VARCHAR(50) NOT NULL,
                science VARCHAR(50) NOT NULL,
                year_of_birth INT(50),
                address INT(50),
                phone INT(50),
                status INT(50) DEFAULT 1,
                created_date TIMESTAMP
                )";

                $students = "CREATE TABLE talabalar (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(50) NOT NULL,
                lastname VARCHAR(50) NOT NULL,
                faculty VARCHAR(50) NOT NULL,
                phone INT(50) UNIQUE NOT NULL,
                status INT(50) DEFAULT 1,
                created_date TIMESTAMP
                )";

                // 4 vazifa
                $phone = "CREATE TABLE telefon (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(50) NOT NULL,
                lastname VARCHAR(50) NOT NULL,
                phone INT(50) UNIQUE NOT NULL,
                created_date TIMESTAMP
                )";

                // 5 vazifa
                $delete = "DROP TABLE talabalar";

                $students = "CREATE TABLE talabalar (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(50) NOT NULL,
                lastname VARCHAR(50) NOT NULL,
                faculty VARCHAR(50) NOT NULL,
                phone INT(50) UNIQUE NOT NULL,
                status INT(50) DEFAULT 1,
                created_date TIMESTAMP
                )";

                // So'rovni tekshirish
                if ($connect->query($user) === TRUE &&
                    $connect->query($sciences) === TRUE &&
                    $connect->query($teachers) === TRUE &&
                    $connect->query($students) === TRUE &&
                    $connect->query($phone) === TRUE &&
                    $connect->query($delete) === TRUE &&
                    $connect->query($students) === TRUE) {
                    echo "Create.table: success";
                } else {
                    echo "Create.table: error: " . $connect->error;
                }

                // Ulanuvchilikni yopish
                $connect->close();
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>


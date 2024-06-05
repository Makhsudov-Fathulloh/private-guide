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

    <title>UPDATE, REPLACE and DELETE</title>

    <style>
        img {
            width: 1000px;
        }
    </style>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <img src="/sql/img/4/4.png" alt=""> <br><br><br>

        <li><b class="topic">Update</b> - malumotlarni yangilash.</li>
        <br>
        <img src="/sql/img/4/update-1.png" alt=""> <br><br><br>
        <img src="/sql/img/4/update-2.png" alt=""> <br><br><br>
        <img src="/sql/img/4/update-3.png" alt=""> <br><br><br>
        <img src="/sql/img/4/update-4.png" alt=""> <br><br><br>
        <img src="/sql/img/4/update-5.png" alt=""> <br><br><br>
        <img src="/sql/img/4/update-6.png" alt=""> <br><br><br>

        <li><b class="topic">Replace</b> - malumotlarni almashtirish.</li>
        <li>Agar <b>id = 2</b> bo'lgan qator yo'q bo'lsa, yangi ma'lumot sifatida qo'shadi.</li>
        <li>Agar <b>id = 2</b> bo'lgan qator bor bo'lsa, name ustuniga <b>'Sales'</b> qiymatini yozadi.</li>
        <br>
        <img src="/sql/img/4/replace.png" alt=""> <br><br><br>

        <h3>Homework</h3>
        <img src="/sql/img/4/homework-1.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) UPDATE employees SET officeCode = 2 WHERE lastName = 'Bondur';
                   UPDATE employees SET firstName = 'Jim', lastName = 'Kerri' WHERE email = 'spatterson@classicmodelcars.com';
                   UPDATE employees SET email = REPLACE(email, '@classicmodelcars.com', '@classiccar.com') WHERE officeCode = 2;

                2) UPDATE customers SET phone = '+7 812 293 3311', creditLimit = 34000 WHERE lastName = 'Semenov' AND firstName = 'Alexander';

                3) UPDATE products SET buyPrice = buyPrice * 0.85 WHERE quantityInStock < 3000;
                   UPDATE products SET buyPrice = buyPrice * 1.15 WHERE productLine = 'Motorcycles';
                   UPDATE products SET buyPrice = buyPrice * 1.10, MSRP = MSRP * 1.18 WHERE productLine = 'Classic Cars' AND quantityInStock < 1000;
            </pre>
            <br>
        </div>
        <br><br><br>

        <li><b class="topic">ALTER TABLE</b> - jadvaldagi yangi ustun qo'shish, ustun turini yoki nomini o'zgartirish,
            jadval nomini o'zgartirish yoki ustunni o'chirish uchun ishlatiladi.<br>
            <b>Jadvalga yangi ustun qo'shish.</b><br><br>
            <img src="/sql/img/4/alter-1.png" alt=""> <br><br><br>
            <img src="/sql/img/4/alter-2.png" alt=""> <br><br><br>
            <img src="/sql/img/4/alter-3.png" alt=""> <br><br><br>

            <b>Jadvalga yangi ikkita va undan oshiq ustun qo'shish.</b><br><br>
            <img src="/sql/img/4/alter-4.png" alt=""> <br><br><br>

            <b>Jadvaldagi ustun turini o'zgartirish (varchar dan integerga o'zgartirib bo'lmaydi !!! varcharda faqat
                ustun baytini o'zgartirish mumkun).</b><br><br>
            <img src="/sql/img/4/alter-5.png" alt=""> <br><br><br>

            <b>Jadvaldagi ustun nomini o'zgartirish.</b><br><br>
            <img src="/sql/img/4/alter-6.png" alt=""> <br><br><br>

            <b>Jadval nomini o'zgartirish.</b><br><br>
            <img src="/sql/img/4/alter-7.png" alt=""> <br><br><br>

            <b>Jadvalda ustunni o'chirish.</b><br><br>
            <img src="/sql/img/4/delete-column-1.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">DELETE</b> - .<br><br>
            <img src="/sql/img/4/delete-1.png" alt=""> <br><br><br>
            <img src="/sql/img/4/delete-2.png" alt=""> <br><br><br>
            <img src="/sql/img/4/delete-3.png" alt=""> <br><br><br>
            <img src="/sql/img/4/delete-4.png" alt=""> <br><br><br>
        </li>
    </ul>
</div>

</body>
</html>


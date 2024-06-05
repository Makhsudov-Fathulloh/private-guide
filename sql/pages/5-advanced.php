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

    <title>Distinct, GROUP BY and HAVING</title>

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
        <img src="/sql/img/5/5.png" alt=""> <br><br><br>

        <li><b class="topic">DISTINCT</b> - dublikatsiz ma'lumot olish. Bir hil bolgan bir nechta malumotlarni faqat
            bittadan olib beradi.
        </li>
        <br>
        <img src="/sql/img/5/distinct.png" alt=""> <br><br><br>

        <li><b class="topic">GROUP BY</b> - ma'lumotkarni guruhlash. SUM(), AVG(), MAX(), MIN(), va COUNT() funksiyalari
            bilan birga ko'proq ishlatiladi.
            <br>
            <img src="/sql/img/5/groupby-1.png" alt=""> <br><br><br>
            <img src="/sql/img/5/groupby-2.png" alt=""> <br><br><br>
            <img src="/sql/img/5/groupby-3.png" alt=""> <br><br><br>

            <b>COUNT() orqali qiymatni oshishini hisoblash.</b><br><br>
            <img src="/sql/img/5/groupby-4.png" alt=""> <br><br><br>
            <img src="/sql/img/5/groupby-5.png" alt=""> <br><br><br>
            <img src="/sql/img/5/groupby-6.png" alt=""> <br><br><br>

            <b>O'rtacha qiymatni AVG() orqali hisoblaganda GROUP BY dan foydalanish</b><br><br>
            <img src="/sql/img/5/groupby-7.png" alt=""> <br><br><br>

            <b>MAX() eng katta va MIN() eng kichkina qiymatni hisoblash.</b><br><br>
            <img src="/sql/img/5/groupby-8.png" alt=""> <br><br><br>

            <b class="topic">HAVING</b> - guruhlanib chiqqan natijalarni filtrlash uchun ishlatiladi.<br><br>
            <img src="/sql/img/5/having-1.png" alt=""> <br><br><br>
            <img src="/sql/img/5/having-2.png" alt=""> <br><br><br>
            <img src="/sql/img/5/having-3.png" alt=""> <br><br><br>

        </li>

        <h3>Homework</h3>
        <img src="/sql/img/5/homework-1.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) select * from orders;
                   select count(*) from orders group by year(orderDate);
                   select year(orderDate) yil, count(*) from orders group by year(orderDate);

                2) select productCode, count(productCode) from orderdetails group by productCode;

                3) select productVendor, sum(quantityInStock) as jami from products group by productVendor;
                   select productVendor, sum(quantityInStock) as jami from products group by productVendor having jami > 4500;
            </pre>
            <br>
        </div>
        <br>

        <img src="/sql/img/5/homework-2.png" alt=""> <br><br><br>
        <img src="/sql/img/5/homework-3.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT customerNumber, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY customerNumber;

                2) SELECT status, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY status;

                3) SELECT DAYNAME(orderDate) AS hafta_kuni, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY DAYOFWEEK(orderDate);

                4) SELECT DAYNAME(orderDate) AS hafta_kuni, COUNT(*) AS jami_buyurtmalar FROM orders WHERE YEAR(orderDate) = 2003 GROUP BY DAYOFWEEK(orderDate);

                5) SELECT YEAR(orderDate) AS yil, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY YEAR(orderDate);

                6) SELECT YEAR(orderDate) AS yil, MONTH(orderDate) AS oy, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY YEAR(orderDate), MONTH(orderDate);

                7) SELECT DATEDIFF(shippedDate, orderDate) AS yetkazish_vaqti, COUNT(*) AS jami_buyurtmalar FROM orders GROUP BY DATEDIFF(shippedDate, orderDate)
                   ORDER BY yetkazish_vaqti ASC LIMIT 10;

                8) SELECT MONTH(orderDate) AS oy, COUNT(*) AS yetkazish_vaqti FROM orders WHERE YEAR(orderDate) = 2004 GROUP BY MONTH(orderDate)
                   HAVING yetkazish_vaqti < 10;

                9) SELECT YEAR(orderDate) AS yil, COUNT(*) AS jami_jo'natilgan_buyurtmalar FROM orders WHERE customerNumber = 141 AND status = 'Shipped'
                   AND YEAR(orderDate) IN (2003, 2004, 2005) GROUP BY YEAR(orderDate);
            </pre>
            <br>
        </div>
        <br>

        <img src="/sql/img/5/homework-4.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT country, COUNT(customerNumber) AS mijozlar_soni FROM customers GROUP BY country;

                2) SELECT country, SUM(creditLimit) AS jami_kredit_chegarasi FROM customers GROUP BY country;

                3) SELECT customerName, COUNT(customerNumber) AS mijozlar_soni FROM customers GROUP BY customerName HAVING COUNT(customerNumber) > 1;

                4) SELECT productCode, SUM(quantityOrdered) AS jami_buyurtmalar FROM orderdetails GROUP BY productCode;

                5) SELECT productCode, SUM(quantityOrdered * priceEach) AS jami_sotilgan FROM orderdetails GROUP BY productCode;

                6) SELECT productCode, COUNT(orderNumber) AS jami_buyurtmalar, SUM(quantityOrdered) AS umumiy_miqdor FROM orderdetails
                   WHERE productCode IN ('S10_1949', 'S12_1099', 'S18_1662', 'S18_4027', 'S18_3136') GROUP BY productCode;

                7) SELECT productCode, SUM(quantityOrdered) AS umumiy_miqdor FROM orderdetails GROUP BY productCode ORDER BY umumiy_miqdor DESC LIMIT 10;

                8) SELECT productCode, SUM(quantityOrdered) AS umumiy_miqdor, SUM(quantityOrdered * priceEach) AS jami_sotilgan FROM orderdetails
                   GROUP BY productCode ORDER BY umumiy_miqdor ASC LIMIT 10;

                9) SELECT productCode, COUNT(orderNumber) AS jami_buyurtmalar FROM orderdetails GROUP BY productCode HAVING COUNT(orderNumber) > 1000;
            </pre>
            <br>
        </div>
        <br>

        <img src="/sql/img/5/homework-5.png" alt=""> <br><br><br>
        <img src="/sql/img/5/homework-6.png" alt=""> <br><br><br>
        <img src="/sql/img/5/homework-7.png" alt=""> <br><br><br>
        <img src="/sql/img/5/homework-8.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT YEAR(paymentDate) AS yil, SUM(amount) AS jami FROM payments GROUP BY YEAR(paymentDate);

                2) SELECT productLine, COUNT(*) AS soni FROM products GROUP BY productLine ORDER BY soni DESC;

                3) SELECT productLine, COUNT(*) AS soni, SUM(quantityInStock * buy_price) AS summa FROM products GROUP BY productLine ORDER BY soni DESC;

                4) SELECT productVendor, COUNT(*) AS soni FROM products GROUP BY productVendor;

                5) SELECT productVendor, COUNT(*) AS soni, SUM(quantityInStock * buy_price) AS summa FROM products GROUP BY productVendor;

                6) SELECT productVendor, COUNT(*) AS soni FROM products GROUP BY productVendor HAVING COUNT(*) > 45000;

                7) SELECT productVendor, SUM(quantityInStock * buy_price) AS summa FROM products GROUP BY productVendor HAVING SUM(quantityInStock * buy_price) > 2000000;
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>


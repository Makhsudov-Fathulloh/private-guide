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

    <title>DATE functions</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <img src="/sql/img/6/6.png" alt=""> <br><br><br>

        <li><b class="topic">CURDATE()</b> - so'rov yuborilgan sanani oladi.</li><br>
        <img src="/sql/img/6/curdate-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/curdate-2.png" alt=""> <br><br><br>

        <li><b class="topic">NOW()</b> - so'rov yuborilgan sanani oladi. 'YYYY-MM-DD HH:MM:DD' formatda sana, minut,
            sekundlari  bilan qaytaradi. Table create qilinganda default value NOW() berish mumkun.</li><br>
        <img src="/sql/img/6/now-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/now-2.png" alt=""> <br><br><br>
        <img src="/sql/img/6/now-3.png" alt=""> <br><br><br>

        <li><b class="topic">DATE()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' formatdan yil, oy, kunni ajratib olib, 'YYYY-MM-DD' formatda qaytaradi.</li><br>
        <img src="/sql/img/6/date-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/date-2.png" alt=""> <br><br><br>

        <li><b class="topic">DAY()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' yoki 'YYYY-MM-DD' formatdan kunni ajratib qaytaradi.</li><br>
        <img src="/sql/img/6/day.png" alt=""> <br><br><br>

        <li><b class="topic">MONTH()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' yoki 'YYYY-MM-DD' formatdan oyni ajratib qaytaradi.</li><br>
        <img src="/sql/img/6/month-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/month-2.png" alt=""> <br><br><br>

        <li><b class="topic">YEAR()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' yoki 'YYYY-MM-DD' formatdan yilni ajratib qaytaradi.</li><br>
        <img src="/sql/img/6/year.png" alt=""> <br><br><br>

        <li><b class="topic">HOUR()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' formatdan soatni ajratib qaytaradi.</li><br>
        <img src="/sql/img/6/year.png" alt=""> <br><br><br>

        <li><b class="topic">WEEK()</b> - brilgan sana yilning nechanchi haftasida ekanini aniqlab beradi. 365(366) / 7 = 52.</li><br>
        <img src="/sql/img/6/week.png" alt=""> <br><br><br>

        <li><b class="topic">WEEKDAY()</b> - brilgan sana haftaning qaysi indeksida ekanini aniqlab beradi.</li><br>
        <img src="/sql/img/6/weekday.png" alt=""> <br><br><br>

        <li><b class="topic">DAYOFWEEK() va DAYNAME()</b> - brilgan sana haftaning qaysi kuniga to'g'ri kelishini aniqlab beradi.</li><br>
        <img src="/sql/img/6/dayofweek-dayname.png" alt=""> <br><br><br>

        <li><b class="topic">ADD_DATE() va ADDDATA()</b> - bu ikki function bir hil ish bajaradi. Berilgan sana kun, soat, minut va boshqacha vaqt turlarini
            qoshib beradi.</li><br>
        <img src="/sql/img/6/add_date-adddate-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/add_date-adddate-2.png" alt=""> <br><br><br>
        <img src="/sql/img/6/add_date-adddate-3.png" alt=""> <br><br><br>
        <img src="/sql/img/6/add_date-adddate-4.png" alt=""> <br><br><br>

        <li><b class="topic">ADDTIME()</b> - berilgan sanaga vaqt qoshish uchun ishlatiladi.</li><br>
        <img src="/sql/img/6/addtime.png" alt=""> <br><br><br>

        <li><b class="topic">DATE_FORMAT()</b> - berilgan sana va vaqtlarni xar-xil formatda olishda ishlatiladi.</li><br>
        <img src="/sql/img/6/date_foemat-1.png" alt=""> <br><br><br>
        <img src="/sql/img/6/date_foemat-2.png" alt=""> <br><br><br>
        <img src="/sql/img/6/date_foemat-3.png" alt=""> <br><br><br>

        <li><b class="topic">DATEDIFF()</b> - ikki sanadan necha kun farq borligini aniqlash uchun ishlatiladi.</li><br>
        <img src="/sql/img/6/datediff.png" alt=""> <br><br><br>

        <li><b class="topic">DATE_SUB() va SUBDATE()</b> - bu ikki function bir hil ish bajaradi. DATE_ADD() functionni teskarisi, berilgan sanadan biror vaqtni ayrish uchun ishlatiladi.</li><br>
        <img src="/sql/img/6/date_sub-subdate.png" alt=""> <br><br><br>

        <li><b class="topic">MONTHNAME()</b> - brilgan 'YYYY-MM-DD HH:MM:DD' yoki 'YYYY-MM-DD' formatdagi vaqtdan, oyni ajratib beradi. Natija matn ko'rinishida bo'ladi.</li><br>
        <img src="/sql/img/6/monthname.png" alt=""> <br><br><br>

        <li><b class="topic">TIMEDIFF()</b> - brilgan ikki vaqt orasidagi farqni topish uchun ishlatiladi.</li><br>
        <img src="/sql/img/6/timediff.png" alt=""> <br><br><br>

        <h3>Homework</h3>
        <img src="/sql/img/6/homework-1.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT COUNT(*), SUM(amount) FROM payments WHERE YEAR(paymentDate) = 2003;

                2) SELECT COUNT(*), SUM(amount) FROM payments WHERE YEAR(paymentDate) = 2004 AND MONTH(paymentDate) = 12;

                3) SELECT COUNT(*), SUM(amount) FROM payments WHERE YEAR(paymentDate) = 2005 AND DAYOFWEEK(paymentDate) = 2;

                4) SELECT COUNT(*), SUM(amount) FROM payments WHERE YEAR(paymentDate) = 2004 AND MONTH(paymentDate) BETWEEN 1 AND 3;


                1) SELECT COUNT(*) FROM orders WHERE customerNumber = 141 AND status = 'Shipped' AND YEAR(orderDate) = 2005;

                2) SELECT * FROM orders WHERE YEAR(shippedDate) = 2003 ORDER BY DATEDIFF(shippedDate, orderDate) DESC LIMIT 10;

                3) SELECT * FROM orders WHERE YEAR(shippedDate) = 2004 ORDER BY DATEDIFF(shippedDate, orderDate) LIMIT 10;

                4) SELECT *, DATEDIFF(shippedDate, orderDate) AS deliveryDays FROM orders WHERE YEAR(shippedDate) = 2005 ORDER BY DATEDIFF(shippedDate, orderDate) ASC LIMIT 10;
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>


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

    <title>INSERT, WHERE, LIMIT and OFFSET</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <img src="/sql/img/3/3.png" alt=""> <br><br><br>

        <li><b class="topic">CRUD - Create Read Update Delete</b></li>
        <img src="/sql/img/3/CRUD.png" alt=""> <br><br><br>
        <li><b class="topic">Create table category and department.</b></li>
        <br>
        <img src="/sql/img/3/create-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/create-2.png" alt=""> <br><br><br>
        <br>

        <li><b class="heading">INSERT INTO category VALUES(1, "Sport");</b> - tableda yangi column yaratish.</li>
        <br>
        <img src="/sql/img/3/insert_into-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/insert_into-2.png" alt=""> <br><br><br>
        <li><b class="heading">Agar</b> id da <b>PRIMARY KEY</b> qoyilganligi uchun id takrorlanmidi.</li>
        <br>
        <img src="/sql/img/3/insert_into-3.png" alt=""> <br><br><br>
        <img src="/sql/img/3/insert_into-4.png" alt=""> <br><br><br>
        <img src="/sql/img/3/insert_into-5.png" alt=""> <br><br><br>
        <br>

        <li><b class="heading">Agar</b> id da <b>AUTI INCREMENT</b> qoyilmagan bolsa id qiymati bolmaydi.</li>
        <br>
        <img src="/sql/img/3/insert_into-6.png" alt=""> <br><br><br>

        <li><b class="heading">N</b> ta qator qoshishlik. Qulay va tez ishlaydi.</li>
        <br>
        <img src="/sql/img/3/insert_into-7.png" alt=""> <br><br><br>

        <li><b class="heading">Agar</b> buyruqta xatolik bolsa, o'sha qatorni tashlab davom etaverish uchun ishlatiladi.
            Aks holda xatolik qatorda buyruqlar to'htaydi.
        </li>
        <br>
        <img src="/sql/img/3/insert_ignore_into.png" alt=""> <br><br><br>

        <h3>Ma'lumotlarni filterlash va qidirish.</h3>
        <img src="/sql/img/3/filter-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/filter-2.png" alt=""> <br><br><br>

        <li><b class="heading">=</b> - operatori.</li>
        <br>
        <img src="/sql/img/3/operator-1.png" alt=""> <br><br><br>

        <li><b class="heading">> va >=</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-2.png" alt=""> <br><br><br>

        <li><b class="heading">< va <=</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-3.png" alt=""> <br><br><br>

        <li><b class="heading">!= va <></b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-4.png" alt=""> <br><br><br>
        <img src="/sql/img/3/operator-5.png" alt=""> <br><br><br>

        <li><b class="heading">OR</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-6.png" alt=""> <br><br><br>

        <li><b class="heading">AND</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-7.png" alt=""> <br><br><br>

        <h3 class="topic">BETWEEN - operatorlari.</h3>
        <img src="/sql/img/3/between-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/between-2.png" alt=""> <br><br><br>
        <li><b class="heading">Date</b> bilan ishlaydigan BETWEET.</li>
        <br>
        <img src="/sql/img/3/between-3.png" alt=""> <br><br><br>

        <li><b class="heading">IN</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-8.png" alt=""> <br><br><br>

        <li><b class="heading">NOT IN</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-9.png" alt=""> <br><br><br>

        <li><b class="heading">IS NULL and IS NOT NULL</b> - operatorlari.</li>
        <br>
        <img src="/sql/img/3/operator-10.png" alt=""> <br><br><br>

        <h3 class="topic">LIKE - operatorlari.</h3>
        <img src="/sql/img/3/like-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/like-2.png" alt=""> <br><br><br>
        <img src="/sql/img/3/like-3.png" alt=""> <br><br><br>
        <img src="/sql/img/3/like-4.png" alt=""> <br><br><br>
        <img src="/sql/img/3/like-5.png" alt=""> <br><br><br>

        <li><b class="heading">SELECT columnname, columnname FROM tablename LIMIT 2;</b> - (LIMIT) kerakli sondagi
            ma'lumotlarni olish.
        </li>
        <br>
        <img src="/sql/img/3/limit.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT columnname, columnname FROM tablename LIMIT 3, 2;</b> - (OFFSET) qaysi qatordan
            ma'lumotlarni olishni belgilash uchun ishlatiladi.
        </li><br>
        <img src="/sql/img/3/offset.png" alt=""> <br><br><br>

        <h3>Homework</h3>
        <img src="/sql/img/3/homework-1.png" alt=""> <br><br><br>
        <img src="/sql/img/3/homework-2.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                2) SELECT
                        (SELECT COUNT(*) FROM employees WHERE gender = 'M') AS erkak_soni,
                        (SELECT COUNT(*) FROM employees WHERE gender = 'F') AS ayol_soni,
                        (SELECT COUNT(*) FROM employees WHERE last_name = 'Van' AND gender = 'M') AS van_familyali_erkaklar,
                        (SELECT COUNT(*) FROM employees WHERE first_name = 'Van' AND gender = 'F') AS van_ismli_ayollar,
                        (SELECT * FROM employees WHERE last_name = 'Van' AND gender = 'F' LIMIT 15) AS van_familyali_ayollar_15,
                        (SELECT CONCAT(first_name, ' ', last_name) FROM employees WHERE last_name = 'Van' AND gender = 'M' LIMIT 15) AS van_familyali_erkaklar_15_FullName;

                3) SELECT birth_date, first_name, last_name FROM employees WHERE YEAR(birth_date) = 1962 ORDER BY birth_date LIMIT 15;
                   SELECT first_name, last_name FROM employees WHERE YEAR(hire_date) = 1992 AND gender = 'F' ORDER BY first_name LIMIT 20;

                4) SELECT * FROM employees WHERE last_name = 'Van' AND gender = 'M' AND emp_no BETWEEN 10000 AND 30000;
                   SELECT * FROM employees WHERE last_name = 'Van' AND gender = 'F' AND birth_date = 1962;

                5) SELECT salary FROM salaries WHERE emp_no = 499966 AND to_date = '2001-12-31';

                6) SELECT * FROM employees WHERE last_name = 'Kyoichi' AND gender = 'F' AND last_name = 'Uma' AND gender = 'M';
                   SELECT * FROM employees WHERE (last_name = 'Kyoichi' AND gender = 'F') AND (last_name = 'Uma' AND gender = 'M');

                7) SELECT * FROM employees WHERE (birth_date = 1959 AND last_name = 'Kyoichi' AND gender = 'F') ADN (birth_date = 1959 AND last_name = 'Uma' AND gender = 'M');

                8) SELECT * FROM employees WHERE first_name LIKE 'Ja%' AND gender = 'F' ORDER BY birth_date DESC LIMIT 15;
                   SELECT * FROM employees WHERE last_name LIKE 'Lu%' AND gender = 'M' ORDER BY birth_date ASC LIMIT 15;

                9) SELECT COUNT(*) AS erkaklar_soni FROM employees WHERE gender = 'M' AND LENGTH(last_name) = 4;
                   SELECT COUNT(*) AS ayollar_soni FROM employees WHERE gender = 'F' AND last_name LIKE 'S%';
                   SELECT COUNT(*) AS erkaklar_soni FROM employees WHERE gender = 'M' AND last_name LIKE 'S%' AND first_name LIKE '%r%';
            </pre>
            <br>
        </div>
        <br><br>

        <img src="/sql/img/3/homework-3.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT * FROM products WHERE productLine = 'Classic Cars' AND quantityInStock < 2000;
                   SELECT SUM(quantityInStock) AS jami_sklad_sum FROM products WHERE productLine = 'Classic Cars';

                2) SELECT * FROM customers WHERE country <> 'USA';
                   SELECT * FROM customers WHERE country != 'USA';
                   SELECT * FROM customers WHERE country NOT IN 'USA';

                   SELECT * FROM customers WHERE country IN ('USA', 'France');
                   SELECT * FROM customers WHERE country = 'USA' AND country = 'France';

                3) SELECT orderNumber, SUM(quantityOrdered * priceEach) AS jami_summa
                   FROM orderdetails
                   WHERE orderNumber IN (
                   SELECT orderNumber
                   FROM orderdetails
                   GROUP BY orderNumber
                   HAVING SUM(quantityOrdered) < 30 AND SUM(quantityOrdered * priceEach) > 100
                   )
                   GROUP BY orderNumber;

                   SELECT productCode, COUNT(DISTINCT orderNumber) AS zakazlar_soni, SUM(quantityOrdered * priceEach) AS jami_summa
                   FROM orderdetails
                   WHERE productCode IN ('S10_1949', 'S12_1099', 'S18_1662', 'S18_4027', 'S18_3136')
                   GROUP BY productCode;

                4) SELECT
                   SUM(amount) AS jami_summa_2004,
                   MIN(amount) AS eng_kichik_tolov_2004
                   FROM payments WHERE YEAR(paymentDate) = 2004;

                   SELECT
                   SUM(amount) AS jami_summa_2005,
                   MAX(amount) AS eng_katta_tolov_2005
                   FROM payments WHERE YEAR(paymentDate) = 2005;

                5) SELECT * FROM customers WHERE address = 2;
                   SELECT * FROM customers WHERE address != 2;
                   SELECT * FROM customers WHERE country NOT IN 2;
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>


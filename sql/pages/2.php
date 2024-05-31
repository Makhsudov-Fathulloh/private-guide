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

    <title>SELECT and ORDER BY</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <li><b class="heading">SELECT * FROM tablename;</b> - kerakli jadvalni barcha ustunlarini tanlash.</li>
        <br>
        <img src="/sql/img/2/select-1.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT colimnname FROM tablename;</b> - kerakli jadvaldan kerakli ustunni tanlash.</li>
        <br>
        <img src="/sql/img/2/select-2.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT colimnname, colimnname FROM tablename;</b> - kerakli jadvaldan kerakli ustunlarni
            tanlash.
        </li>
        <br>
        <img src="/sql/img/2/select-3.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT colimnname AS newcolimnname, columnname FROM tablename;</b> - (Alias) kerakli
            jadvaldan kerakli ustunlarni nomini o'zgartirish.
        </li>
        <br>
        <img src="/sql/img/2/select-4.png" alt=""> <br><br><br>

        <li><b class="topic">MySQL Aggregate Functions</b></li>
        <br>
        <img src="/sql/img/2/aggregate.png" alt=""> <br><br><br>

        <li><b class="heading">SELECT COUNT(*) FROM tablename;</b> - kerakli jadvaldagi malumotlar sonini olish.</li>
        <br>
        <img src="/sql/img/2/select-3.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT COUNT(*) AS countname FROM tablename;</b> - kerakli jadvaldagi malumotlar sonini
            olish va countka name berish.
        </li>
        <br>
        <img src="/sql/img/2/select-3.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT MAX(columnname) AS max_columnname FROM tablename;</b> - MAX() ustundagi eng katta
            qiymatni aniqlaydi.
        </li>
        <br>
        <img src="/sql/img/2/max().png" alt=""> <br><br><br>
        <li><b class="heading">SELECT MIN(columnname) FROM tablename;</b> - MIN() ustundagi eng kichkina qiymatni
            aniqlaydi.
        </li>
        <br>
        <img src="/sql/img/2/min().png" alt=""> <br><br><br>
        <li><b class="heading">SELECT SUM(columnname) AS total_columnname FROM tablename;</b> - SUM() ustundagi barcha
            qiymatlarni yigindisini hisoblash.
        </li>
        <br>
        <img src="/sql/img/2/sum().png" alt=""> <br><br><br>
        <li><b class="heading">SELECT AVG(columnname) AS average_columnname FROM tablename;</b> - AVG() ustundagi barcha
            qiymatlarni o'rtachasini hisoblash.
        </li>
        <br>
        <img src="/sql/img/2/avg().png" alt=""> <br><br><br>

        <li><b class="topic">SELECT CONCAT(columnname, ' ', columnname) AS full_columnname FROM tablename;</b> -
            CONCAT() ustun qiymatlarini birlashtirib chiqarish.
        </li>
        <br>
        <img src="/sql/img/2/concat().png" alt=""> <br><br><br>

        <li><b class="topic">ORDER BY</b> - malumotlarni tartiblash.</li>
        <br>
        <img src="/sql/img/2/orderBy.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname;</b> - ASC o'sib borish boyicha malumotlarni
            tartiblash.
            Agar ASC yoki DESC yozilmasa default <b>ASC</b> qilib saralasdi.
        </li>
        <br>
        <img src="/sql/img/2/asc-1.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname ASC;</b> - ASC o'sib borish boyicha
            malumotlarni tartiblash.
        </li>
        <br>
        <img src="/sql/img/2/asc-2.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname DESC;</b> - DESC kamayib borish boyicha
            malumotlarni tartiblash.
        </li>
        <br>
        <img src="/sql/img/2/desc.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname DESC;</b> - DESC kamayib borish boyicha
            malumotlarni tartiblash.
        </li>
        <br>
        <img src="/sql/img/2/desc.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname, columnname;</b> - bir nechta ustunlar
            boyicha malumotlarni tartiblash.
        </li>
        <br>
        <img src="/sql/img/2/multiple-columns-1.png" alt=""> <br><br><br>
        <li><b class="heading">SELECT * FROM tablename ORDER BY columnname DESC, columnname ASC;</b> - bir nechta
            ustunlar boyicha malumotlarni tartiblash.
        </li>
        <br>
        <img src="/sql/img/2/multiple-columns-2.png" alt=""> <br><br><br>

        <h3>Home work</h3>
        <img src="/sql/img/2/2.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                1) SELECT first_name AS Ism, last_name AS Familya FROM employees;

                2) SELECT AVG(salary) AS OrtachaOylik FROM salaries;
                   SELECT MAX(salary) AS EngKattaOylik FROM salaries;
                   SELECT MIN(salary) AS EngKichikOylik FROM salaries;

                3) SELECT * FROM employees ORDER BY gender = 'M' LIMIT 10;
                3) SELECT * FROM employees ORDER BY gender = 'M' LIMIT 10;

                   SELECT * FROM employees WHERE gender = 'F' LIMIT 10;
                   SELECT * FROM employees WHERE gender = 'F' LIMIT 10;

                4) SELECT * FROM salaries ORDER BY employee DESC LIMIT 10;

                5) SELECT COUNT(*) FROM department;

                6) SELECT
                        CASE
                            WHEN oylik > 80000 THEN 'super oylik'
                            WHEN oylik >= 50000 THEN 'yaxshi oylik'
                            ELSE 'kam oylik',
                            emp_no
                   FROM salaries;
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>


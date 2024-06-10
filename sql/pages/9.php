<?php

$title = "SUBQUERY, UNION";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <li><b class="topic">SUBQUERY</b> - bir so'rovda ichida boshqa so'rovni (boshqa so'rov, hamda uning natijasini) ishlatishni ifodalaydi.
            Bu, asosan ichki so'rovlarda, WHERE, HAVING yoki FROM bo'limlarida amalga oshiriladi. <br>
            <img src="/sql/img/9/subquery-1.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-2.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-3.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-4.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-5.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-6.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-7.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-8.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-9.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-10.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-11.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-12.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-13.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-14.png" alt=""> <br><br><br>
            <img src="/sql/img/9/subquery-15.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">UNION</b> - ikki yoki undan ortiq natijalarni, bitta qilib olish uchun ishlatiladi ishlatiladi. <b>UNION</b>da
            barcha <b>SELECT</b>da ko'rsatilgan ustunlar soni va tarkiblari bir xil bo'lish kerak. Ustun malumotlari, turlari birxil yoki mos bo'lishi kerak.
            Natijadagi ustunlar nomini, birinchi <b>SELECT</b>dan oladi.
            <h3>Union ikkixil korinishga ega.</h3>
            <ol>
                <li><b>UNION ALL</b></li>
                <li><b>UNION DISTINCT yoki UNION</b></li>
            </ol><br>
            <img src="/sql/img/9/union-1.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-2.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-3.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-4.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-5.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-6.png" alt=""> <br><br><br>
            <img src="/sql/img/9/union-7.png" alt=""> <br><br><br>

        <h3>Homework</h3>
        <img src="/sql/img/9/homework-1.png" alt=""> <br><br><br>
        <img src="/sql/img/9/homework-2.png" alt=""> <br><br><br>
            <div class="pre"><br>
                <pre>
                1) SELECT firstName AS ismi, lastName AS familyasi, 'mijoz' AS rol
                   FROM customers
                   UNION
                   SELECT firstName AS ismi, lastName AS familyasi, 'hodim' AS rol
                   FROM employees;

                2) SELECT firstName AS contactFirstName, lastName AS contactLastName, 'France' AS country
                   FROM employees
                   WHERE country = 'France'
                   UNION
                   SELECT contactFirstName, contactLastName, country
                   FROM customers
                   WHERE country = 'France';
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>


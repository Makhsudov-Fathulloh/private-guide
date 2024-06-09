<?php

$title = "Normalization";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <li><b class="topic">Database Normalization</b> - formalarni normallashtirish, malumotlar bazasidagi
            malumotlarni tartibga solish.
            Ortiqcha kerksiz dublikat bolgan malumotlarni olib tashlash. Xotiradan joyni kamroq egallashi va CRUD
            amllarini osonlashtirishka hizmat qiladi.
            <img src="/sql/img/7/normalization-1.png" alt=""> <br><br><br>

            <b>Type of normalization:</b>

        <li><b>Forma-1:</b> Jadvalning har-bir katagida faqat bitta malumot bolishi kerak. Takrorlanadigan malumotlar
            bolmasligi kerak.
        </li>
        <img src="/sql/img/7/normalization-2.png" alt=""> <br><br><br>

        <li><b>Forma-2:</b> Malumotlar 1-forma asosida saqlangan bolishi kerak. <b>Index</b>ga ega bo'lmagan barcha
            atributlar
            <b>Primary key</b>ga to'liq bog'liq.
        </li>
        <img src="/sql/img/7/normalization-3.png" alt=""> <br><br><br>
        <img src="/sql/img/7/normalization-4.png" alt=""> <br><br><br>
        <img src="/sql/img/7/normalization-5.png" alt=""> <br><br><br>
        <img src="/sql/img/7/normalization-6.png" alt=""> <br><br><br>

        <li><b>Forma-3</b>.</li>
        <img src="/sql/img/7/normalization-7.png" alt=""> <br><br><br>
        <img src="/sql/img/7/normalization-8.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">Foreign key</b> - ikkita jadvalni bir-biriga boglashda ishlatiladigan <b>index</b>.
            Foreign key orqali bog'lanayotkan ustunlarining tipi bir xil bo'lishi shart. Ikki jadvalni bog'laganda
            PRIMARY KEY ishlatiladi.
        </li>
        <img src="/sql/img/7/foreign-1.png" alt=""> <br><br><br>

        <li><b>CASCADE actions</b>.</li>
        <img src="/sql/img/7/cascade-1.png" alt=""> <br><br><br>
        <img src="/sql/img/7/cascade-2.png" alt=""> <br><br><br>

        <li><b>Actions</b>.</li>
        <!--        <li><b>ON DELETE RESTRICT (DEFAULT)</b>.</li>-->
        <img src="/sql/img/7/actions-1.png" alt=""> <br><br><br>
        <img src="/sql/img/7/actions-2.png" alt=""> <br><br><br>
        <img src="/sql/img/7/actions-3.png" alt=""> <br><br><br>

        <!--        <li><b>ON DELETE CASCADE</b>.</li>-->
        <img src="/sql/img/7/on-delete-cascade-1.png" alt=""> <br><br><br>
        <img src="/sql/img/7/on-delete-cascade-2.png" alt=""> <br><br><br>

        <!--        <li><b>ON DELETE SET NULL</b>.</li>-->
        <img src="/sql/img/7/on-delete-set-null-1.png" alt=""> <br><br><br>
        <img src="/sql/img/7/on-delete-set-null-2.png" alt=""> <br><br><br>
        <img src="/sql/img/7/on-delete-set-null-3.png" alt=""> <br><br><br>
        <img src="/sql/img/7/on-delete-set-null-4.png" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>


<?php

$title = "Introduction to Bootstrap";

include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/bootstrap/index.php">Bootstap</a></b></li>
        <li><b><a href="/bootstrap/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <h2> Kurs boshlangich talabi HTML va CSS </h2>

        <li><b class="topic">CSS framework</b> - CSS tilidan foydalangan holda, standartlarga mos web dizayn yaratishni osonlashtiradigan kutubxona (library).
            Yani framework web sahifani asosini tashkil qiladi.</li><br>

        <li><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b class="topic"><a href="https://getbootstrap.com/">Bootstrap</a></b> - HTML, CSS va JavaScript yordamida yozilgan qulay,
            qayta ishlash uchun mo'ljallangan ko'dlarning ulkan to'plami. Frontend dasturchilar uchun <b>responsive</b> web sahifalarni
        <b>tezda</b> va <b>osonlik</b> bilan yaratish uchun moljanlangan <b>CSS framework</b>.</li><br>

        <h2>Bootstrap afzalliklari va <a href="https://getbootstrap.com/docs/versions/">versiyalari</a></h2>
            <li>Vaqtni tejaydi</li>
            <li>Foydalanishka oson</li>
            <li>Responsive Grid</li>
            <li>Moslashka oson</li>
            <li><b>Cross-Browser</b> qo'llab quvvatlashi</li><br>

        <h2>Loyihamizga <span class="red">Bootstrap</span>ni ikki xil korinishda qo'shish mumkun: <b>CDN</b> va <b>local</b> orqali</h2>

        <ol>
            <li><b class="heading"><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">CDN</a> orqali qo'shish</b> - Public CDN web sahifa
                yaratish uchun ishlatiladigan ochiq manbali (open source) loyihalarni (jQuery, AngularJs, Bootstrap ...) o'zida saqlaydigan va boshqalarga ulashadigan
                web xizmat.</li><br>
            <img src="/bootstrap/img/CDN.png" alt="CDN"> <br><br>

            Masalan: <a href="https://www.jsdelivr.com/">jsdelivr.com</a>, <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">Bootstarap uchun CDN</a><br><br>

            <li><b class="heading"><a href="https://getbootstrap.com/docs/5.3/getting-started/download/">Local</a> orqali qo'shish</b> - bootstarp
                <b>fayl</b>larni (Compiled CSS and JS) kompyuterga <b>yuklab</b> olib, HTML hujjatimizdan ularga <b>havola</b> ko'rsatib qoyiladi.</li><br>
            <img src="/bootstrap/img/local.png" alt=""> <br><br><br>
        </ol>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>

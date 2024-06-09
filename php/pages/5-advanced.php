<?php

$title = "Require, Include, MySQLi, PDO(CRUD)";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/php/index.php">PhP</a></b></li>
    </ul>

    <ul>
        <img src="/php/img/5/1.png" alt=""> <br><br><br><br>

        <li><b class="topic">require</b> - faylni yuklab olish va uning ma'lumotlarini ishlatish uchun kerak bo'lgan
            joyda ishlatiladi.
            Agar fayl topilmasa yoki yuklanmasa, skript xatolik bilan tugatiladi va to'xtatiladi. <b>Require</b>ni qayta
            qayta chaqirish mumkun.
        </li>
        <li><b class="topic">require_once</b> - faylni yuklab olish va uning ma'lumotlarini ishlatish uchun kerak
            bo'lgan joyda ishlatiladi.
            Agar fayl topilmasa yoki yuklanmasa, skript xatolik bilan tugatiladi va to'xtatiladi.
            <b>Require_once</b> nechi martta chaqirilishidan qat'it nazar faqat bir martta ishlaydi.
        </li>

        <li><b class="topic">include</b> - faylni yuklab olish uchun ishlatiladi. Agar fayl topilmagan bo'lsa yoki
            yuklab olinmasa, PHP skriptning boshqa qismini ishga tushiradi.
            Xatolik sodir bo'lsa ham, skriptning qolgan qismini ishga tushiradi va xatolikni qaytaradi. <b>include</b>ni
            qayta qayta chaqirish mumkun.
        </li>
        <li><b class="topic">include_once</b> - funksiya ham faylni yuklab olish uchun ishlatiladi, lekin ular bilan
            yuklangan fayl bir marta yuklab olinadi.
            <b>include_once</b> nechi martta chaqirilishidan qat'it nazar faqat bir martta ishlaydi.
        </li>
        <br><br>

        <li><b class="topic">Try and Carch</b> - userga xatolikni
            chiroyli va tushinarli ushlash va chqarishda phpda try-catch ishlatiladi. Xatolik <b class="red">throw</b>
            orqli otiladiva <b>try</b> orqali ushlanadi,
            try bloki ichida bajariladigan kodda xatolik yuzaga kelsa, catch bloki ichidagi kod ishga tushadi.
        </li>
        <br>
        <img src="/php/img/5/2.png" alt=""> <br><br><br>
        <img src="/php/img/5/3.png" alt=""> <br><br><br>
        <img src="/php/img/5/4.png" alt="">
        <img src="/php/img/5/5.png" alt="">
        <img src="/php/img/5/6.png" alt=""> <br><br><br>

        <h2 class="topic">PHP connect MySQL</h2>
        <img src="/php/img/5/7.png" alt=""> <br><br><br>

        <li><b class="topic">PHP connect MySQL</b> - qilishning ikki xil usuli mavjud.</li>
        <ol>
            <li><b>MySQL extension</b> - MySql</li>
            <li><b>PDO (PhP Data Object)</b> - MySQL, PostgreSQL, Oracle, Firebird, MS SQL Server, Sybase, Informix,
                IBM, FreeTDS, SQLite, Cubrid, 4D
            </li>
        </ol>
        <br>
        <img src="/php/img/5/8.png" alt=""> <br><br><br>
        <img src="/php/img/5/9.png" alt=""> <br><br><br>
        <img src="/php/img/5/10.png" alt=""> <br><br><br>
        <img src="/php/img/5/11.png" alt="Data Source Name"> <br><br><br>
        <img src="/php/img/5/12.png" alt=""> <br><br><br>
        <img src="/php/img/5/13.png" alt=""> <br><br><br>
        <img src="/php/img/5/14.png" alt=""> <br><br><br>
        <img src="/php/img/5/15.png" alt=""> <br><br><br>
        <img src="/php/img/5/16.png" alt=""> <br><br><br>
        <img src="/php/img/5/17.png" alt=""> <br><br><br>
        <img src="/php/img/5/18.png" alt=""> <br><br><br>
        <img src="/php/img/5/19.png" alt=""> <br><br><br>

        <h3>PDO statement</h3>
        <img src="/php/img/5/20.png" alt=""> <br><br><br>
        <ol>
            <li><b class="heading">prepare()</b> - so'rovni tayorlash.</li>
            <li><b class="heading">execute()</b> - so'rovni bajarish.</li>
            <li><b class="heading">fetch(), fetchAll()</b> - natijalarni olish.</li>
        </ol>
        <br>

        <img src="/php/img/5/21.png" alt=""> <br><br><br>
        <ol>
            <li><b class="heading">bindParam()</b> - asosiy qulaylik hafsizligi, tashqaridan keladigan malumotlarni
                olishda ishlatiladi.
                o'zgaruvchiga ulaydi va bu o'zgaruvchining qiymati so'rov bajarilguncha o'zgarishi mumkin. bindParam()
                o'zgaruvchan (dinamik) qiymatlar uchun mos keladi.
            </li>
        </ol>
        <br>
        <img src="/php/img/5/22.png" alt=""> <br><br><br>

        <img src="/php/img/5/23.png" alt=""> <br><br><br>
        <ol>
            <li><b class="heading">bindValue()</b> - qiymatni ulash paytida belgilaydi va keyinchalik o'zgarmaydi.
                bindValue() ko'proq o'zgaruvchan bo'lmagan (statik) qiymatlar uchun ishlatiladi.
            </li>
        </ol>
        <br>

        <img src="/php/img/5/24.png" alt=""> <br><br><br>
        <img src="/php/img/5/25.png" alt=""> <br><br><br>
        <ol>
            <li><b class="heading">PDO::FETCH_ASSOC</b> - natijani aotsiatuv massiv qilib qaytaradi.<br><br>
                <img src="/php/img/5/fetch_assoc.png" alt="" style="width: 350px"></li><br><br><br>
            <li><b class="heading">PDO::FETCH_BOTH</b> - natijalarni har ikkala indeks raqami va ustun nomi bilan
                qaytaradi. Har bir ustun ma'lumoti uchun siz unga ustun nomi orqali ham, ustun raqami orqali ham murojaat qilishingiz mumkin.<br><br>
                <img src="/php/img/5/fetch_both.png" alt="" style="width: 350px"></li><br><br><br>
            <li><b class="heading">PDO::FETCH_LAZY</b> - FETCH_ASSOC, FETCH_BOTH, FETCH_OBJ usullar birlashtirilgan holatda olish.<br><br>
                <img src="/php/img/5/fetch_lazy.png" alt="" style="width: 350px"></li><br><br><br>
            <li><b class="heading">PDO::FETCH_OBJ</b> - natijani object qilib qaytaradi.<br><br>
                <img src="/php/img/5/fetch_obj.png" alt="" style="width: 350px"></li><br><br><br>
        </ol><br>

        <img src="/php/img/5/26.png" alt=""> <br><br><br>
        <img src="/php/img/5/27.png" alt=""> <br><br><br>
        <img src="/php/img/5/28.png" alt=""> <br><br><br>
        <img src="/php/img/5/29.png" alt=""> <br><br><br>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>

<?php

$title = "Introduction to Javascript";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/javascript/index.php">Javascript</a></b></li>
        <li><b><a href="/javascript/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <h2> Kurs boshlangich talabi HTML va CSS. ixtiyoriy Bootstrap va SASS</h2>

        <li><b class="topic"><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">Javascript</a></b> - web uchun maxsus yuqori darajali (high-level) tili.
            Uning yordamida <b>HTML</b> va <b>CSS</b>ni dinamik tarzda uzgartirish mumkun.</li><br>

        <h2>Avtomolibga oxshatsak:</h2>
        <img src="/javascript/img/javascript.png" alt="javascript"> <br><br><br>

        <h2>Kundalik ishlatadigan tilimizga o'xshatadigan bolsak:</h2>
        <ol>
            <li>HTML - ot (noun).</li>
            <li>CSS - sifat (abjective).</li>
            <li>Javascript - fel (verb).</li>
        </ol>
        <img src="/javascript/img/role.png" alt="role"> <br><br><br>

        <h3>Application:</h3>
        <img src="/javascript/img/js-1.png" alt="application"> <br><br><br>

        <h2>Javascript vs ECMAScript:</h2>
        <ol><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b class="heading">Javascript</b> -  umumiy maqsadga yonaltirilgan <b>scripting</b> til bolib,
            ECMAScript tomonidan belgilangan spetsifikatsiyalarga javob beradi. Boshqacha qilib aytkanda, ECMAScript scripting til uchun <b>reja</b> (blueprint, standart) bo'lsa,
            Javascript esa bu standartning amalga o'shirilishi.</ol><br>
        <img src="/javascript/img/javascript&ECMAScript.png" alt="application"> <br><br><br>

        <h2>Javascript <a href="https://www.w3schools.com/js/js_versions.asp">versiyalari</a></h2>
        <img src="/javascript/img/javascripNOTjava.png" alt="javascripNOTjava"> <br><br><br>

        <li><b class="topic">Developer console</b> - javascript kodni tezda ishka tushurish uchun foydalaniladi.</li><br>
        <img src="/javascript/img/console.png" alt="console" width="1440"> <br><br>

        <li><b class="topic">Online IDE</b> - <a href="https://playcode.io/javascript">Online Javascript Editor</a>, <a href="https://jsfiddle.net/">JSFiddle</a>,
            <a href="https://replit.com/">The collaborative browser based IDE.</a></li><br>

        <h3>Javascript asosan 2 xil korinishida web sahifagabog'lanadi:</h3>
        <ol>
            <li>&lt;script&gt; tegi orasida kerakli Javascript kodlar yozib ketiladi va web sahifa ochilganda ishka tushadi.</li><br>
            <span style="display: inline-block"><img src="/javascript/img/js-code-connect(1).png" alt="js-code-connect(1)"></span>
            <span style="display: inline-block"><img src="/javascript/img/js-code-connect(2).png" alt="js-code-connect(2)"></span><br><br><br>

            <li>&lt;script&gt; tegining <b>src</b> attributi orqali tashqi JS fayli ulanadi.</li><br>
            <img src="/javascript/img/js-code-connect(3).png" alt="js-code-connect(3)"> <br><br>
        </ol>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>


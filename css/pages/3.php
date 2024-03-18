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

    <title>Positioning</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/index.php">CSS</a></b></li>
        <li><b><a href="/css/project.html">Project</a></b></li>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">HTML da elementlar chapdan o'ngga va tepadan pastga qarab joylashib keladi.
            Elementning 4 xossasi bolib <i>top, bottom, left, right</i>, elementning joylashishini aniqlab beradi (document flue).</b></li><br>
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br>

        <li><b class="topic">Positioning</b> - joylashish, joylashishni aniqlash, joylashtirish turini aniqlash uchun ishlatiladigan xossa (attribute)</li>
        <ol>
            <li><b><i>static (default)</i></b> - HTMLda element default holatda positsiyasi static boladi</li>

            <li><b><i>relative</i></b> - element o'zini hozirgi(normal) joylashuviga nisbatan joylashadi</li>
            <img src="/css/img/position/position-relative.png" alt="position-relative"> <br><br>

            <ul>
                <li><b class="topic">Viewport</b> - web-sahifaning foydalanuvchiga ko'rinadigan qismi</li>
                <img src="/css/img/position/viewport.png" alt="viewport" width="1000"> <br><br>
            </ul>
            <li><b><i>fixed</i></b> - element <b>viewport</b>ga nisbatan joylashadi. Yani har doim o;zini joyida qoladi va <b>scroll</b> paytida joyini o'zgartirmaydi</li>
            <img src="/css/img/position/position-fixed.png" alt="position-fixed"> <br><br>

            <li><b><i>absolute</i></b> - element o'zining eng yaqin joylashtirilgan (positioned) ajdod (ancestor) elementiga nisbatan joylashadi. Jpylashtirilgan degani,
                position xossasi <b>statis</b> qiymatdan boshqa qiymatga ega bo'lgan elementga aytiladi</li>
            <img src="/css/img/position/position-absolute.png" alt="position-absolute"> <br><br>

            <li><b><i>sticky</i></b> - element <b>scroll</b>ning qayerda joylashganiga qarab joylashadi. Bu qiymat <b>relative</b> va <b>fixed</b> qiymatlarini o'zida saqlaydi va
                <b>scroll</b>ni qayerda joylashganiga qarab shu ikki qiymatdan birini o'zida oladi</li>
            <img src="/css/img/position/position-sticky.png" alt="position-sticky"> <br><br>

            <li><b><i>z-index</i></b> - ustma-ust tushub qolgan elementlarni ketma-ketligini aniqlab beradi. Kattaroq <b>z-index</b>ga ega bo'lgan element kichikrog'iga qaraganda oldinda joylashadi.
            <b>Z-index har doim joylashtirilgan (positioned) elementlarga amal qiladi</b></li>
            <img src="/css/img/position/z-index-img.png" alt="z-index-img" width="750"> <br><br>
            <img src="/css/img/position/z-index-code.png" alt="z-index-code"> <br><br>
        </ol>

        <li><b class="topic">Overflow</b> - kontent elementini ichiga sig'may qolgan payti, o'zini qanday tutishini aniqlab beradi</li>
        <ol>
            <li><b><i>visible (default)</i></b> - sig'may qolgan qismi boricha ekranda ko'rinadi</li>
            <img src="/css/img/overflow/overflow-visible.png" alt="overflow-visible"> <br><br>
            <img src="/css/img/overflow/overflow-visible-code.png" alt="overflow-visible_code"> <br><br>

            <li><b><i>hidden</i></b> - sig'may qolgan qismi ekrandan yashiriladi (berkitiladi) </li>
            <img src="/css/img/overflow/overflow-hidden.png" alt="overflow-hidden"> <br><br>
            <img src="/css/img/overflow/overflow-hidden-code.png" alt="overflow-hidden-code"> <br><br>

            <li><b><i>scroll</i></b> - sig'may qolgan qismini ko'rish uchun <b>scroll</b> qo'shiladi</li>
            <img src="/css/img/overflow/overflow-scroll.png" alt="overflow--scroll"> <br><br>
            <img src="/css/img/overflow/overflow-scroll-code.png" alt="overflow-scroll-code"> <br><br>

            <li><b><i>auto</i></b> - xuddi <b>scroll</b> o'xshab sig'may qolgan qismini ko'rish uchun <b>scroll</b> qo'shiladi. Lekin faqatgina kerak bo'lgan payti</li>
            <img src="/css/img/overflow/overflow-auto.png" alt="overflow-visible--auto"> <br><br>
            <img src="/css/img/overflow/overflow-auto-code.png" alt="overflow-auto-code"> <br><br>

            <ul><li><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Vertikal va go'rizontal <b>scroll</b>ni <b>overflow-x</b> va <b>overflow-y</b>
                    yordamida alohida qilib o'tish mumkun</li></ul>
            <img src="/css/img/overflow/overflow-x-y.png" alt="overflow-x-y"> <br><br>
        </ol>
    </ul>
</div>

</body>
</html>


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
    <link rel="stylesheet" href="/css/css/main.css">

    <title>Responsive Web Design</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/index.php">CSS</a></b></li>
        <li><b><a href="/css/project/index.html">Project</a></b></li>
    </ul>
</div>

<div>
    <ul>
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br>

        <li><b class="topic">Responsive Web Design (RWD)</b> - saytlarni turli xil qurilmalarda chiroyli va qulay
            korinishini taminlash.
            HTML va CSS yordamida elementlarni qurilma o'lchoviga qarab berkitish, boshqa joyga ko'chirish va o'lchovni
            o'zgartirishdan
            tashkil topadi.
        </li>

        <img src="/css/img/RWD/web.png" alt="RWD Web"> <br><br>
        <img src="/css/img/RWD/mobile.png" alt="RWD mobile"> <br><br>

        <h3>RWD elementlari:</h3>
        <ol>
            <li><b class="topic">Pixel ratio</b> - qurilmaning pixeldagi ekran o'lchovi va CSS yordamida ko'rsatilgan
                pixel orasidagi nisbat
            </li>
            <img src="/css/img/RWD/pixel-ratio.png" alt="pixel-ratio"> <br><br>
            <img src="/css/img/RWD/pixel-ratio-m.png" alt="pixel-ratio-m"> <br><br>
        </ol>

        <h3>Web sahifani responsive qilish:</h3>
        <ol>
            <li><b class="topic">Viewport meta tag</b> - web sahifani mobil qurilmaning ekraniga moslashtiradi.</li>
            <img src="/css/img/RWD/meta-tag-1.png" alt="viewport-meta-tag-1"> <br><br>
            <div style="display: inline-block">
                <img src="/css/img/RWD/meta-tag-2.png" alt="viewport-meta-tag-2">
                <img src="/css/img/RWD/meta-tag-3.png" alt="viewport-meta-tag-3"> <br><br>
                <img src="/css/img/RWD/pixel-ratio-m.png" alt="pixel-ratio-m"> <br><br>
            </div>
        </ol>

        <h3>Media queries:</h3>
        <ol>
            <li><b class="topic"><i>Mebile first</i></b> - web sahifani birinchi bolib mobil qurilmalar uchun yaratib,
                keyin kattaroq
                ekraniga moslashtirishka aytiladi.
            </li>
            <br>

            <li><b class="topic"><i>Desctop first</i></b> - web sahifani birinchi bolib katta ekranga ega bolgan
                qurilmalar uchun yaratib, keyin kichikroq
                ekranlar uchun moslashtirishka aytiladi. <b>Mobile first</b>ni aksi hisoblanadi.
            </li>
        </ol>
            <br>

            <li><b class="topic">Media queries (Media so'rovlar)</b> - kontentni malum bir shartlarga ko'ra
                moslashtirish.
                Qurilma ekran o'lchovini malum bir pixelda katta yoki kichkina bo'lishini misol qilishimiz mumkun.
                Masalan: Qurilmaning ekran kengligi <b>500px</b>dan katta holatda, sarlavhamizni <span
                        style="color: blue">fony-size</span>
                qiymati <b style="color: red">3rem</b>ga tenglash. <br>
                <img src="/css/img/RWD/media-queries.png" alt="media-queries"> <br><br>
            </li>


        <h3>Ekran o'lchamini aniqlash bo'yicha ikki asosiy ifoda:</h3>
        <ol>
            <li><b class="topic">min-width</b> - bu qoida ekranning kengligi ko'rsatilgan qiymatga teng yoki katta
                bo'lgan holatdaligina ishlaydi.<br>
                Media so'rovlar asosiy styledan keyin kelishi kerak !!!
            </li><br>
            <img src="/css/img/RWD/mq-min-width-1.png" alt="mq-min-width-1">

            <h4>Bir nechta media so'rovlar:</h4>
            <img src="/css/img/RWD/mq-min-width-2.png" alt="mq-min-width-2"> <br><br>
        </ol>

        <ol>
            <li><b class="topic">max-width</b> - bu qoida ekranning kengligi ko'rsatilgan qiymatga teng yoki kichik
                bo'lgan holatdaligina ishlaydi. <b>min-width</b>ning aksi hisoblanadi.<br>
                Media so'rovlar asosiy styledan keyin kelishi kerak !!!
            </li><br>
            <img src="/css/img/RWD/mq-max-width-1.png" alt="mq-max-width-1">

            <h4>Bir nechta media so'rovlar:</h4>
            <img src="/css/img/RWD/mq-max-width-2.png" alt="mq-max-width-2"> <br><br>
        </ol>

        <li><b class="topic">Breakpoints</b> - qurilmaning kengligiga qarab web sahifa o'z kontentini o'zgartiruvchi nuqtalar.
        Bu nuqtalarda web sahifa odatda boshqa ko'rinishga o'tib, qurilmaga moslashadi. Ular yana <b>media query breakpoints</b>
        deb ham ataladi, chunki ular <b>media queries</b> bilan birga ishlatiladi.</li><br>

        <img src="/css/img/RWD/breakpoints.png" alt="breakpoints"> <br><br>
        <img src="/css/img/RWD/breakpoints-2.png" alt="breakpoints"> <br><br>

        <ol>
            <li><a href="https://keysoftwareservices.co.in/responsive-design-breakpoints/">Responsive Design Breakpoints</a></li>
            <li><a href="https://www.mydevice.io">Compare devices</a></li>
            <li><a href="https://getbootstrap.com/docs/5.0/layout/breakpoints/">Bootstrap Breakpoints</a></li>
            <li><a href="https://masonry.desandro.com/">Masonry (library)</a></li>
        </ol>

    </ul>
</div>

</body>
</html>


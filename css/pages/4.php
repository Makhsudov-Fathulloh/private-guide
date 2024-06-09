<?php

$title = "Images";
include '../../root/header.php';
?>

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

        <li><b class="topic">Backgrount</b></li>
        <ol>
            <li><b><i>backgrount-image</i></b> - element uchun orqa fo'n rasm qo'yish uchun ishlatiladi</li>
            <img src="/css/img/background/background-image.png" alt="background-image"> <br><br>

            <li><b><i>backgrount-repeat</i></b> - orqa fo'ndagi rasm qanday takrorlanishini belgilab beradi</li>
            <ul>
                <ol>
                    <li><b><i>repeat (default)</i></b> - rasm elementni orqa fo'nini to'ldirish uchun x(gorizonlal) va
                        y(vertikal) yo'nalishda qaytariladi
                    </li>
                    <img src="/css/img/background/background-repeat(repeat).png" alt="background-repeat(repeat)">
                    <br><br>

                    <li><b><i>repeat-x</i></b> - rasm elementni orqa fo'nini to'ldirish uchun faqat x(gorizonlal) yo'nalishda qaytariladi
                    </li>
                    <img src="/css/img/background/background-repeat(repeat-x).png" alt="background-repeat(repeat-x)">
                    <br><br>

                    <li><b><i>repeat-y</i></b> - rasm elementni orqa fo'nini to'ldirish uchun faqat y(vertical) yo'nalishda qaytariladi
                    </li>
                    <img src="/css/img/background/background-repeat(repeat-y).png" alt="background-repeat(repeat-y)">
                    <br><br>

                    <li><b><i>no-repeat</i></b> - rasm qaytarilmaydi(takrorlanmaydi)
                    </li>
                    <img src="/css/img/background/background-repeat(no-repeat).png" alt="background-repeat(no-repeat)">
                    <br><br>
                </ol>
            </ul>

            <li><b><i>backgrount-size</i></b> - orqa fo'ndagi rasm qanday ol'chovga ega bo'lishini belgilab beradi</li>
            <ul>
                <ol>
                    <li><b><i>cover</i></b> - berilgan elementni butunlay qoplaydi</li>
                    <img src="/css/img/background/background-size(cover).png" alt="background-size(cover)">
                    <br><br>

                    <li><b><i>contain</i></b> - berilgan rasm elementni to'liqligicha ko'rsatadi</li>
                    <img src="/css/img/background/background-size(contain).png" alt="background-size(contain)">
                    <br><br>

                    <li><b><i>o'lchovni ko'rsatish</i></b> - berilgan rasm elementni ko'rsatilgan o'lchovga ega bo'ladi</li>
                    <img src="/css/img/background/background-size(enter).png" alt="background-size(enter)">
                    <br><br>

                </ol>
            </ul>

            <li><b><i>backgrount-position</i></b> - orqa fo'ndagi rasm qayerdan boshlanishini belgilab beradi</li>
            <ul>
                <ol>
                    <li><b><i>top/right/bottom/left/center</i></b> - berilgan rasm elementni ko'rsatilgan qiymatka ko'ra
                        joylashadi. Birinchi qiymat gorizo'ntal, ikkinchi qiymat vertikal joylashadi</li>
                    <img src="/css/img/background/background-position.png" alt="background-position">
                    <br><br>

                    <li><b><i>o'lchovni ko'rsatish</i></b> - berilgan rasm elementni ko'rsatilgan o'lchovga ega bo'lgan masofada joylashadi</li>
                    <img src="/css/img/background/background-position(enter).png" alt="background-position(enter)">
                    <br><br>

                </ol>
            </ul>

            Foydali ilovalar:
            <a href="https://www.w3schools.com/css/css_background.asp">1</a>
            <a href="https://www.w3schools.com/css/css_background_image.asp">2</a>
            <a href="https://www.w3schools.com/css/css_background_repeat.asp">3</a>
            <a href=" https://www.w3schools.com/css/css_background_shorthand.asp">4</a>
            <a href="https://www.w3schools.com/cssref/pr_background-image.php">5</a>
            <a href="https://www.w3schools.com/cssref/pr_background-position.php">6</a>
            <a href="https://www.w3schools.com/cssref/pr_background-repeat.php">7</a>
            <a href="https://www.w3schools.com/cssref/css3_pr_background-size.php">8</a>
        </ol><br><br>

        <li><b class="topic">Styling images</b> - rasimlarga stillar berish</li><br><br>
        <ol>
            <li><b><i>rounded</i></b></li>
            <img src="/css/img/background/rounded.png" alt="rounded"><br><br>
            <img src="/css/img/background/rounded-image.png" alt="rounded-image"><br><br>

            <li><b><i>thumbnail</i></b> - original rasimni yuklamastan qanaqa ko'rinishda ekanligini ko'rsatib beradi</li>
            <img src="/css/img/background/thumbnail.png" alt="thumbnail"><br><br>
            <img src="/css/img/background/thumbnail-image.png" alt="thumbnail-image"><br><br>

            <li><b><i>opasity</i></b></li>
            <img src="/css/img/background/opacity.png" alt="opacity"><br><br>
            <img src="/css/img/background/opacity-image.png" alt="opacity-image"><br><br><br>
        </ol>

        <li><b class="topic">Gradient</b> - bir vaqtning o'zida ko'rsatilgan ikki va undan ortiq ranglar orasida o'tish imkoniyatini berish</li>
        <img src="/css/img/background/gradient.png" alt="gradient"><br><br>

        <ol>
            <li><b><i>linear</i></b> - chiziqli gradient</li>
            <img src="/css/img/background/linear.png" alt="linear"><br><br>
            <img src="/css/img/background/linear-image-1.png" alt="linear-image-1"><br><br>
            <img src="/css/img/background/linear-image-2.png" alt="linear-image-2"><br><br>
            <img src="/css/img/background/linear-image-3.png" alt="linear-image-3"><br><br>
            <img src="/css/img/background/linear-image-4.png" alt="linear-image-4"><br><br>
            <img src="/css/img/background/linear-image-5.png" alt="linear-image-5"><br><br>
            <img src="/css/img/background/linear-image-6.png" alt="linear-image-6"><br><br>
            <img src="/css/img/background/linear-image-7.png" alt="linear-image-7"><br><br>
            <img src="/css/img/background/linear-image-8.png" alt="linear-image-8"><br><br>
            <img src="/css/img/background/linear-image-9.png" alt="linear-image-9"><br><br>
            <img src="/css/img/background/linear-image-10.png" alt="linear-image-10"><br><br>
            <img src="/css/img/background/linear-image-11.png" alt="linear-image-11"><br><br>
            <img src="/css/img/background/linear-image-12.png" alt="linear-image-12"><br><br>

            <a href="https://www.w3schools.com/css/css3_gradients.asp">Linear gradient</a>
            <a href="https://www.w3schools.com/cssref/func_linear-gradient.php">Linear gradient-2</a><br><br><br>

            <li><b><i>radial</i></b></li>
            <img src="/css/img/background/radial.png" alt="radial"><br><br>
            <img src="/css/img/background/radial-image-1.png" alt="radial-image-1"><br><br>
            <img src="/css/img/background/radial-image-2.png" alt="radial-image-2"><br><br>
            <img src="/css/img/background/radial-image-3.png" alt="radial-image-3"><br><br>
            <img src="/css/img/background/radial-image-4.png" alt="radial-image-4"><br><br>

            <a href="https://www.w3schools.com/css/css3_gradients_radial.asp">Radial gradient</a>
            <a href="https://www.w3schools.com/cssref/func_radial-gradient.php">Radial gradient-2</a><br><br><br>
        </ol>

        <li><b class="topic">Filters</b> - elementga vizual effekt berish uchun ishlatiladi</li>
        <img src="/css/img/background/filters.webp" alt="filters"><br><br>

        <ol>
            <li><b><i>blur</i></b> - rasm elementini xiraligini belgilaydi</li>
            <img src="/css/img/background/blur.png" alt="blur"><br><br>

            <li><b><i>brightness</i></b> - rasm elementini yorqinligini belgilaydi</li>
            <img src="/css/img/background/brightness.png" alt="brightness"><br><br>

            <li><b><i>contrast</i></b> - rasm elementini kontrastini belgilaydi</li>
            <img src="/css/img/background/contrast.png" alt="contrast"><br><br>

            <li><b><i>grayscale</i></b> - rasm elementini kulrangga o'tkazadi</li>
            <img src="/css/img/background/grayscale.png" alt="grayscale"><br><br>

            <img src="/css/img/background/filters-4.png" alt="filters"><br><br>

            <li><b><i>hue rotate</i></b> - rasm elementini rang aylanishini belgilaydi</li>
            <img src="/css/img/background/hue-rotate.png" alt="hue-rotate"><br><br>

            <li><b><i>invert</i></b> - rasm elementini invertlgini belgilaydi</li>
            <img src="/css/img/background/invert.png" alt="invert"><br><br>

            <li><b><i>opacity</i></b> - rasm elementini korinish darajasini belgilaydi</li>
            <img src="/css/img/background/filter-opacity.png" alt="filter-opacity"><br><br>

            <img src="/css/img/background/filters-3.png" alt="filters"><br><br>

            <a href="https://www.w3schools.com/cssref/css3_pr_filter.php">Filters</a><br><br><br>
        </ol>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>

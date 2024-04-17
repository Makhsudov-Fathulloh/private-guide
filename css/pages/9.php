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

    <title>CSS advanced</title>
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
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br><br>

        <li><b class="topic">2D</b> - geometrik model bo'li, elementimizni joylashuvini aniqlash uchun ikkita nuqta
            bilan ishlanadi.<br><br>
            <img src="/css/img/css-advanced/css-2d.png" alt="CSS-2D"> <br><br>
        </li>

        <li><b class="topic">Transform</b> - web sahifadagi elementlarni aylantirish, siljitish, o'lchovini o'zgartirish
            va og'dirish uchun ishlatiladigan CSS xossasi. Uning <b>ikki</b> ko'rinishi mavjud, <b>2D</b> va
            <b>3D</b>.<br><br>
            <img src="/css/img/css-advanced/transform.png" alt="transform"> <br><br><br>
            <ol>
                <li class="heading"><b><i>rotate()</i></b> - elementni soat strelkasi yoki unga teskari bo'lgan
                    yonalishda
                    burish (aylantirish) uchun ishlatiladi. Musbat qiymat soat strelkasi boyicha, manfiy esa teskari
                    yo'nalishda buradi.
                </li>
                <br>
                <img src="/css/img/css-advanced/rotate-1.png" alt="rotate()"> <br><br>

                <h4>Soat strelkasi boyicha elementni burish:</h4>
                <img src="/css/img/css-advanced/rotate-2.png" alt="rotate(1deg)"> <br><br>

                <h4>Soat strelkasi teskari yo'nalishda elementni burish:</h4>
                <img src="/css/img/css-advanced/rotate-3.png" alt="rotate(-1deg)"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <span class="topic">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-origin">Transform orign</a>
                    </span> - o'rgartirish amal qiladigan nuqta:</h3>
                <img src="/css/img/css-advanced/transform-origin.png" alt="transform-origin"> <br><br>

                <li class="heading"><b><i>translate()</i></b> - elementni turgan joyidan siljitish (surish) uchun
                    ishlatiladi.
                    Musbat qiymat <b>o'ng va pastga</b> qarab, manfiy esa <b>chap va yuqoriga</b> qarab siljitish
                    (surish) uchun ishlatiladi.
                </li>
                <br><br>
                <img src="/css/img/css-advanced/translate-1.png" alt="translate()"> <br><br>
                <img src="/css/img/css-advanced/translate-2.png" alt="translate-docs"> <br><br>
                <img src="/css/img/css-advanced/translate-3.png" alt="translate-right_bottom"> <br><br>
                <img src="/css/img/css-advanced/translate-4.png" alt="translate-left_top"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>Translate</b>ning yana <b>tranlasteX()</b>
                    va
                    <b>tranlasteY()</b> korinishlariham mavjud.</h3>
                <img src="/css/img/css-advanced/translate-x.png" alt="translate-x"> <br><br>
                <img src="/css/img/css-advanced/translate-y.png" alt="translate-y"> <br><br>

                <li class="heading"><b><i>scale()</i></b> - elementning o'lchovini oshirish yoki kamaytirish uchun
                    ishlatiladi.
                    0 bilan 1 orasidagi berilgan qiymat uning o'lchovini kamaytiradi, 1 dan katta qiymat esa o'lchovini
                    oshiradi.
                </li>
                <br>
                <img src="/css/img/css-advanced/scale-1.png" alt="scale()"> <br><br>
                <img src="/css/img/css-advanced/scale-2.png" alt="scale-docs"> <br><br>
                <img src="/css/img/css-advanced/scale-3.png" alt="scale-docs"> <br><br>
                <img src="/css/img/css-advanced/scale-4.png" alt="scale-docs"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>Scale</b>ning yana
                    <b>scaleX()</b> va <b>scaleY()</b> korinishlariham mavjud.</h3>

                <li class="heading"><b><i>skew()</i></b> - elementi malum bir darajaga (degree)ga o'gdirish uchun
                    ishlatiladi.
                    Manfiy qiymat o'gish yo'nalishini teskari tomonga o'zgartiradi.
                </li>
                <br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>Scale</b>ning yana
                    <b>scaleX()</b> va
                    <b>scaleY()</b> korinishlariham mavjud.</h3>

                <a href="https://www.w3schools.com/css/css3_2dtransforms.asp">2D w3schools</a>
                <a href="https://infinityisreallybig.com/2019/05/14/points-coordinates-skew-coordinates-and-graphs/">2D
                    infinityisreallybig</a>
                <a href="https://www.htmldog.com/references/css/properties/transform/">2D htmldog</a>
                <a href="https://learn.adafruit.com/adafruit-gfx-graphics-library/coordinate-system-and-units">2D
                    learn.adafruit</a>
                <a href="https://idg.net.ua/blog/uchebnik-css/ispolzovanie-css/transform/scale">2D idg.net</a>
                <a href="https://www.sitepoint.com/how-to-use-2d-transformation-functions-in-css/">2D sitepoint</a> <br><br>

            </ol>

        <li><b class="topic">3D</b> - geometrik model bo'li, elementimizni fazodagi joylashuvini aniqlash uchun uchta
            nuqta bilan ishlanadi.<br><br>
            <img src="/css/img/css-advanced/css-3d.png" alt="CSS-3D"> <br><br>
        </li>

        <li><b class="topic">3D Transform</b> - web sahifadagi elementlarni o'lchovini fazoda aylantirish, siljitish,
            o'lchovini,
            o'zgartirish uchun ishlatiladigan CSS xossasi. <br><br>
            <img src="/css/img/css-advanced/transform.png" alt="transform"> <br><br><br>

            <h3><i class="fa fa-exclamation-circle" style="font-size:1rem;color:red"></i> <b>2D</b> va <b>3D
                    transform</b>lar uchun bir xil <b>transform</b> CSS xossasi ishlatiladi.</h3>
            <ol>
                <li class="heading"><b><i>rotate3D()</i></b> - elementni fazoda ko'rsatilgan qiymatlar bo'yicha
                    aylantirish
                    uchun ishlatiladi.
                </li>
                <br>
                <img src="/css/img/css-advanced/rotate3d-1.png" alt="rotate3d()-1"> <br><br>
                <img src="/css/img/css-advanced/rotate3d-2.png" alt="rotate3d()-2"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>rotate3d()</b>ning yana
                    <b>rotateX()</b>, <b>rotateY()</b> va <b>rotateZ()</b> korinishlariham mavjud.</h3><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>perspective</b>- elementning
                    foydalanuvchidan qanday uzoqlikda turganini belgilab beradi. Qiymat qancha kichik bo'lsa,
                    foydalanuvchi
                    shuncha yaqin bo'ladi.</h3>
                <img src="/css/img/css-advanced/perspective.png" alt="perspective"> <br><br>

                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/rotate3d">Rotate3D</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/rotateX">RotateX</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/rotateY">RotateY</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/rotateZ">RotateX</a>
                <br><br><br>

                <li class="heading"><b><i>translate3D()</i></b> - elementni fazoda ko'rsatilgan qiymatlar bo'yicha
                    siljitish
                    uchun ishlatiladi.
                </li>
                <br>
                <img src="/css/img/css-advanced/translate3d-1.png" alt="translate3d-1"> <br><br>
                <img src="/css/img/css-advanced/translate3d-2.png" alt="translate3d-2"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>translate3d()</b>ning yana
                    <b>translate3dX()</b>, <b>translate3dY()</b> va <b>translate3dZ()</b> korinishlariham mavjud.</h3>
                <br>

                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translate3d">Rotate3D</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translateX">RotateX</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translateY">RotateY</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translateZ">RotateX</a>
                <br><br><br>

                <li class="heading"><b><i>scale3d()</i></b> - elementning fazoda ko'rsatilgan qiymatlar boyicha
                    o'lchovini
                    oshirish yoki kamaytirish uchun ishlatiladi. 0 bilan 1 orasidagi berilgan qiymat uning o'lchovini
                    kamaytiradi, 1 dan katta qiymat esa o'lchovini
                    oshiradi.
                </li>
                <br>
                <img src="/css/img/css-advanced/scale3d-1.png" alt="scale3d()-1"> <br><br>
                <img src="/css/img/css-advanced/scale3d-2.png" alt="scale3d()-2"> <br><br>

                <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>scale3d()</b>ning yana
                    <b>scaleX()</b>, <b>scale3dY()</b> va <b>scaleZ()</b> korinishlariham mavjud.</h3><br>

                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/scale3d">Rotate3D</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/scaleX">RotateX</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/scaleY">RotateY</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/scaleZ">RotateX</a>
                <br><br><br>
            </ol>

        <li><b class="topic">Transition</b> - elementning <b>xossa qiymatlarini</b> ko'rsatilhan <b>vaqt</b> davomida
            <b>ravon
                o'zgarishini</b> taminlaydi. Transition yaratish uchun inga <b>ikki</b> qiymat ko'rsatilishi <b
                    style="color: red">shart</b>:
            effekt qo'shmoqchi bolgan <b>element xossasi</b> va effektning <b>davomiyligi</b>. Effektimiz davomiyligi
            son ko'rinishidagi
            qiymatga ega bolib, o'lchov birligi <b>s</b> (soniya) yoki <b>ms</b> (milliysoniya)larda lo'rsatilishi
            kerak.
        </li>
        <br><br>
        <img src="/css/img/css-advanced/transition-1.png" alt="transition-1"> <br><br>
        <img src="/css/img/css-advanced/transition-2.png" alt="transition-2"> <br><br>

        <h3>Bir necha xossalarga effect qoshish:</h3>
        <img src="/css/img/css-advanced/transition-3.png" alt="transition-3"> <br><br>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Element hamma xossalari uchun transition
            effectini amal qildirmoqchi bolsak
            <b>all</b> kalit so'zidan foydalanamiz:</h3>
        <img src="/css/img/css-advanced/transition-4.png" alt="transition-4"> <br><br>

        <h3><i class="fa fa-exclamation-circle" style="font-size:1rem;color:red"></i> Hamma CSS xossalari xam transiton
            effektiga ega bo'la olmaydi.</h3>

        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_animated_properties">Css transition</a><br><br>

        <li><b class="topic">Transition timing function</b> - effektni tezligini qanday egri chiziqqa ega bo'lishini
            belgilab beradi.
        </li>
        <br>
        <img src="/css/img/css-advanced/transition-timing-1.png" alt="transition-timing-1"> <br><br>
        <img src="/css/img/css-advanced/transition-timing-2.png" alt="transition-timing-2"> <br><br>
        <img src="/css/img/css-advanced/transition-timing-3.png" alt="transition-timing-2"> <br><br>

        <li><b class="topic">Transition delay</b> - effektni qachon boshlanishi (kechikishini) belgilab beradi. Son
            ko'rinishidagi qiymatga ega bo'lib,
            o'lchov birligi <b>s</b> (soniya) yoki <b>ms</b> (millisoniya)larda korsatilishi kerak.
        </li>
        <br>
        <img src="/css/img/css-advanced/transition-delay-1.png" alt="transition-delay-1"> <br><br>
        <img src="/css/img/css-advanced/transition-delay-2.png" alt="transition-delay-2"> <br><br>

        <li><b class="topic">CSS animation</b> - element bir <b>style</b>dan boshqa <b>style</b>ga asta-sekinlik bilan
            o'tishini taminlaydi.
            Animation istalgan CSS xossasini istalgan martta o'zgartirish imkonini beradi.
        </li>
        <br>
        <img src="/css/img/css-advanced/css-animation-1.png" alt="css-animation-1"> <br><br>

        <li><b class="topic">@keyframes</b> - animatsiya stillarini qaysi qiymatga o'zgartirishni belgilab beradi.</li>
        <br>
        <img src="/css/img/css-advanced/css-keyframes-1.png" alt="css-keyframes-1"> <br><br>

        <li><i class="fa fa-check" style="background-color: green; color: white; border-radius: 20%;"></i> Animatsiyaga
            <b>xoxlagan</b> nom bersak bo'ladi. Keyframe intervali uchun esa <b>0-100%</b>
            ga bo'lgan qiymatlarni ko'rsatib o'tishimiz mumkun. <b>0</b> va <b>100%</b> uchun <b>from</b> va <b>to</b>
            kalit so'zidan foydalanish mumkun.
        </li>
        <br>
        <img src="/css/img/css-advanced/css-keyframes-2.png" alt="css-keyframes-2"> <br><br>

        <h3>Bir necha keyframe intervaliga ega animatsiya</h3>
        <img src="/css/img/css-advanced/css-keyframes-3.png" alt="css-keyframes-3"> <br><br>

        <a href="https://www.nicehash.com/mining-hardware">CSS Animation</a> <br><br>

        <li><b class="topic">Animation name</b> - element ega bo'ladigan animatsiya nomi. <b>@keyframes</b> uchun
            ko'rsatilgan <b>animatsiya nomi</b>
            qiymat ko'rinishida ishlatiladi.
        </li>
        <br>

        <li><b class="topic">Animation duration</b> - animatsiyani qanday <b>davomiylikka</b> ega bo'lishini
            belgilab beradi. <b>Son</b> ko'rinishidagi qiymatga ega bo'lib,
            o'lchiv birligi <b>s</b> (soniya) yoki <b>ms</b> (millisoniya)larda ko'rsatilishi kerak.
        </li>
        <br>
        <img src="/css/img/css-advanced/css-animation-name.png" alt="css-animation-name-duration"> <br><br>

        <li><b class="topic">Animation delay</b> - animatsiyani qachon <b>boshlanshi</b>
            belgilab beradi. <b>Son</b> ko'rinishidagi qiymatga ega bo'lib,
            o'lchiv birligi <b>s</b> (soniya) yoki <b>ms</b> (millisoniya)larda ko'rsatilishi kerak.
        </li>
        <br>
        <img src="/css/img/css-advanced/css-animation-delay.png" alt="css-animation-delay"><br><br>

        <li><b class="topic">Animation iteration count</b> - animatsiya necha martta <b>qaytarilishini</b>
            belgilab beradi. <b>Default</b> qiymati <b>bir</b>ga teng.
        </li><br>
        <img src="/css/img/css-advanced/css-animation-iteration-count.png" alt="css-animation-iteration-count"><br><br>

        <li><b class="topic">Animation duration</b> - animatsiya oldinga (forwards), orqaga (backwards) yoki almashinib
            (alternate) qo'yilishini belgilab beradi.
        </li><br>
        <img src="/css/img/css-advanced/css-animation-duration.png" alt="css-animation-duration"><br><br>
        <img src="/css/img/css-advanced/css-animation-direction-reverse.png" alt="css-animation-direction-reverse"><br><br>
        <img src="/css/img/css-advanced/css-animation-direction-alternate.png" alt="css-animation-direction-alternate"><br><br>
        <img src="/css/img/css-advanced/css-animation-direction-alternate-reverse.png" alt="css-animation-direction-alternate-reverse"><br><br>

        <li><b class="topic">Animation timing function</b> - animatsiya tezligi qanday egri chiziqqa ega bo'lishini belgilab beradi.
        </li><br>
        <img src="/css/img/css-advanced/css-animation-timing-function.png" alt="css-animation-timing-function"><br><br>
        <img src="/css/img/css-advanced/css-animation-timing-function-code.png" alt="css-animation-timing-function-code"><br><br>

        <li><b class="topic">Animation fill mode</b> - animatsiya boshlanishidan o'ldin va tugagandan so'ng elementimiz o'zining oldingi xossalariga egab bo'ladi
            lekin quyidagi xossa orqali, bu holatni o'zgartirish mumkun.
        </li><br>
        <img src="/css/img/css-advanced/css-animation-fill-mode.png" alt="css-animation-fill-mode"><br><br>
        <img src="/css/img/css-advanced/css-animation-fill-mode-code.png" alt="css-animation-fill-mode-code"><br><br>

        <li><b class="topic">Animation play state</b> - animatsiya qanday holatda ekanini belgilab beradi. Uning 2 qiymati mavjud: <b>running</b>
            (animaysiya davom etayotkan holat) va <b>paused</b> (animatsiya to'xtatib qo'yilgan holat).
        </li><br>
        <img src="/css/img/css-advanced/css-animation-play-state.png" alt="css-animation-play-state"><br><br>

        <li><b class="topic">Animation</b> - animatsiyaga tegishli bo'lgan xossalar uchun qisqartma (shorthand).
        </li><br>
        <img src="/css/img/css-advanced/css-animation.png" alt="css-animation"><br><br>
        <img src="/css/img/css-advanced/css-animation-code.png" alt="css-animation-code"><br><br>
    </ul>
</div>

</body>
</html>


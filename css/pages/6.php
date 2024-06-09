<?php

$style = "/css/css/main.css";
$title = "Units (O'lchov birliklari)";

include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/index.php">CSS</a></b></li>
        <li><b><a href="/css/project/index.html">Project</a></b></li>
    </ul>
</div>

<div class="container">
    <img src="/css/img/box/box-model.png" alt="box-model"> <br><br>

    <li><b class="topic">CSS Unit</b> - CSS xossalarining o'lchov birligini bildiradi. <b>CSS Unit xossalari:</b>
        <i>padding, border, margin, top, right, bottom, left, font-size va h.k. CSS o'lchov birliklari yozdamida,
            turli hil qurilmalarga moslash imkoniyatiga ega bolamiz. Qurilmalar har hil ekran o'lchovlarga ega bo'ladi
            va
            shunga asosan CSS xossalarining qiymatlari o'zgartirib boriladi.</i></li>
    <ol>
        <li><b class="heading">Absolute (mutloq) units</b> - absolute units qanday ko'rsatilgan bolsa, huddi
            shunday ekranga chiqadi.
            Absolute o'lchov birliklaerini ishlatish <b><i>tavsiya etilmaydi</i></b>,
            chunki elar ekranga qarab o'z o'lchovlarini uzgartirmaydi.
        </li>
        <br>
        <ul>
            <b><i>
                    <li>px<br></li>
                    <li>cm<br></li>
                    <li>mm<br></li>
                    <li>in<br></li>
                    <li>pt<br></li>
                </i></b><br>
        </ul>

        <li><b class="heading">Relative (nisbiy) units</b> - relative o'lchov birliklari boshqa uzunlik o'lchoviga
            nisbatan
            o'z uzunligini belgilaydi. Turli ekranlatga avtomatik moslashadi.
        </li>
        <br>
        <ul>
            <b><i>
                    <li>%<br></li>
                    <li>em<br></li>
                    <li>rem<br></li>
                    <li>vw va vh (viewport units)<br></li>
                </i></b><br>
        </ul>
    </ol>

    <li><b class="topic">Percentage (%) unit (Foiz)</b> - percentage unit <b>position</b> xossasining qiymatiga qarab
        o'zgaradi.
        Yani <b>position</b>ning bir qiymatiga boshqacha ikkinchi qiymatiga boshqacha natija beradi.
    </li>
    <ol>
        <li class="heading"><b>position:fixed</b> - position:fixed qiymatiga ega bolgan payti, biz ko'rsatgan %
            qiymatimiz
            <b>viewport</b>ga nisbatan o'lchamga ega boladi.
        </li>
        <br>
        <img src="/css/img/units/position:fixed.png" alt="position:fixed"><br><br>

        <li class="heading"><b>position:absolute</b> - position:absolute qiymatiga ega bolgan payti, biz ko'rsatgan %
            qiymatimiz
            eng yaqin <b>positioned (static da boshqa hamma holatda)</b> avlodining content va padding qiymatlarini
            yigindisiga
            <b>(content+position)</b> nisbatan o'lchamga ega boladi.
        </li>
        <br>
        <img src="/css/img/units/position:absolute.png" alt="position:absolute"><br><br>

        <li class="heading"><b>position:static/relative</b> - position:static/relative qiymatiga ega bolgan payti, biz
            ko'rsatgan % qiymatimiz
            eng yaqin <b>block</b> turidagi avlodining <b>content</b> qiymatiga nisbatan o'lchamga ega boladi.
        </li>
        <br>
        <img src="/css/img/units/position:static-relative.png" alt="position:static/relative"><br><br>
    </ol>

    <li><b class="topic">Em (em) unit</b> - em o'lchov birligi bo'lib, elementning <b>font-size</b> xossasiga asoslanib
        hisoblanadi.
        Agar element <b>font-size</b> xossasi bolmasa, ota-ona (parent) elementining <b>font-size</b> qiymatini, undaham
        bolmasa
        keyingi ajdodining (ancestor) <b>font-size</b> qiymatiga asoslanadi.
    </li>

    <ol>
        <li>Element <b>font-size</b> xossasiga ega bolganda</li>
        <br>
        <img src="/css/img/units/em_font-size-1.png" alt="em_font-size-1"><br><br>

        <li>Element <b>font-size</b> xossasiga ega bolmaganda</li>
        <br>
        <img src="/css/img/units/em_font-size-2.png" alt="em_font-size-2"><br><br>

        <li>Elementning hech qaysi ajdodida (ancestor) <b>font-size</b> xossasiga ega bolmaganda. Baruserning default
            <b>font-size</b>ni oladi, odatda 16px boladi.
        </li>
        <br>
        <img src="/css/img/units/em_font-size-3.png" alt="em_font-size-3"><br><br>

        <li>(<b class="topic">!</b>)Elementning nested (ichma-ich) joylashgan holatda, eng yaqin ajdodini oladi</li>
        <br>
        <img src="/css/img/units/em_font-size-4.png" alt="em_font-size-4"><br><br>
    </ol>

    <h3 class="topic">Practice:</h3>

    <ul>
        <li class="heading"><b>px (pixel)</b></li>
        <br>

        <div class="pixel">

            <img src="/css/img/units/pixel.png" alt="px (pixel)"><br><br>

            <h2>Heading</h2>
            <h6>Sub-heading</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.
            </p>
        </div>
        <br>

        <li class="heading"><b>em</b></li>
        <br>

        <div class="em">

            <br>

            <img src="/css/img/units/em.png" alt="em"><br><br>

            <h2>Heading</h2>
            <h6>Sub-heading</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.
            </p>
        </div>
        <br>
    </ul>

    <ul>
        <li><b class="topic">Rem (rem) unit</b> - rem o'lchov birligi bo'lib, sahifamizning <b>root (ildiz)</b>
            elementining
            <b>font-size</b> xossasiga asoslanib hisoblanadi, Root element bu <b>HTML</b> elementi. Odatda <b>HTML</b>
            elementi <b><i>16px</i></b>
            font qiymatiga ega boladi.
        </li>
        <br>

        <ol>
            <li><b>HTML</b> elementi o'zining <b>font-size</b> xossasiga ega bolmaganda</li>
            <br>
            <img src="/css/img/units/rem-unit-1.png" alt="rem-unit-1"><br><br>

            <li><b>HTML</b> elementi o'zining <b>font-size</b> xossasiga ega bolganda</li>
            <br>
            <img src="/css/img/units/rem-unit-2.png" alt="rem-unit-2"><br><br>

            <li>(<b class="topic">!</b>)Elementning nested (ichma-ich) joylashgan holatda, eng yaqin ajdodini oladi</li>
            <br>
            <img src="/css/img/units/em_font-size-3.png" alt="em_font-size-4"><br><br>
        </ol>
    </ul>


    <h3 class="topic">Practice:</h3>

    <ul>
        <li class="heading"><b>rem</b></li>
        <br>

        <div class="rem">

            <img src="/css/img/units/rem.png" alt="rem"><br><br>

            <h2>Heading</h2>
            <h6>Sub-heading</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. <br>
                <span>A simple text</span>
            </p>
        </div>
    </ul>
    <br>


        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Viewport - saytimizning eqranda korinib turadigan qismi</h3>

        <ul>
            <li><b class="topic">Viewport width</b> - <b><i>viewport</i></b>ning to'liq kengligiga nisbatan
                hisoblanadi.
                Masalan: <b>10vw</b> <b><i>viewport</i></b>ning 10%, <b>20vw</b> <b><i>viewport</i></b>ning 20%
                kengligini oladi.<br><br>

                <img src="/css/img/units/viewport-width.png" alt="viewport-width"><br>
            </li>
            <br>

            <li><b class="topic">Percentage (%)</b> va <b class="topic">vw (viewport width)</b> farqi, <b>%</b> bu
                joylashgan elementga nisbatan yani parent yoki ancestor elementlarga nisbatan o'lchanadi. <b>vw</b> esa
            faqatgina brauzerning <b>viewport</b> kengligiga nisbatan oladi.</li><br>

            <img src="/css/img/units/viewport-%25-vw.png" alt="viewport-%-vw"><br><br>

            <li><b class="topic">Viewport height</b> - <b><i>viewport</i></b>ning to'liq balantligiga nisbatan
                hisoblanadi.
                Masalan: <b>10vh</b> <b><i>viewport</i></b>ning 10%, <b>100vh</b> <b><i>viewport</i></b>ning 100%
                balandligini oladi.<br><br>

                <img src="/css/img/units/viewport-height.png" alt="viewport-height"><br>
            </li>

            <h3>Bloch sahifani balandligini to'liq egallash uchun</h3>

            <img src="/css/img/units/viewport-height-2.png" alt="viewport-height-2"><br><br>

            <li><b class="topic">Viewport Minimum (vmin)</b> - <b><i>viewport</i></b>ning to'liq balandligi va kengligidan
                eng kichigiga nisbatan hisoblaydi.
                Masalan: <b>10vmin</b> <b><i>viewport</i></b>ning balandligi va kengligidan <b>eng kichigining 10%</b>ga
                nisbatan o'lchanadi.<br><br>

                <img src="/css/img/units/viewport-vmin.png" alt="viewport-vmin"><br><br>
            </li>

            <li><b class="topic">Viewport Maximum (vmax)</b> - <b><i>viewport</i></b>ning to'liq balandligi va kengligidan
                eng kattasiga nisbatan hisoblaydi.
                Masalan: <b>10vmax</b> <b><i>viewport</i></b>ning balandligi va kengligidan <b>eng kattasidan 10%</b>ga
                nisbatan o'lchanadi.<br><br>

                <img src="/css/img/units/viewport-vmax.png" alt="viewport-vmax"><br><br>

                <div style="text-align: center">
                    <h3>CSS hossalari va ularning "unit"lari</h3>

                    <img src="/css/img/units/CSS_attribute&units.png" alt="CSS_attribute&units"><br>
                </div>
            </li>
        </ul>
</div>

<?php
include "../../root/footer.php";
?>

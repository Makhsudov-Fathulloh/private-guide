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
    <link rel="stylesheet" href="/css/css/style.css">

    <title>Core properties</title>
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
        <li><b class="topic">Box Model</b> - HTMLdagi har bir element CSS uchun shu modelga asoslangan bo'ladi. Ya'ni
            CSS har bir elementimizni Box(quti) modeli ostida ko'radi
        </li>
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br>

        <li><b class="topic">Padding</b> - elementning content qismidan border (chegara) qismigacha bo'lgan masofa</li>
        <img src="/css/img/box/padding.png" alt="padding"> <br><br>

        <li><b class="topic">Border</b> - elementning chegarasi</li>
        <img src="/css/img/box/border.png" alt="border"> <br><br>

        <li><b class="topic">Margin</b> - element va uning atrofidagi elementlar orasidagi masofa</li>
        <img src="/css/img/box/margin.png" alt="margin"> <br><br>

        <li><b class="topic">Margin collapsing</b> - ikki elementning <b>top</b> va <b>bottom</b> 'margin'lari
            birlashib, ikkalasidan kattasini margin qilib oladi. Shu holat margin collapsing deyiladi, faqat <b>top</b>
            va <b>bottom</b> uchun ishlaydi!
        </li>
        <img src="/css/img/box/margin-collapsing.png" alt="margin-collapsing">
        <li><b class="topic">Margin collapsing code</b></li>
        <img src="/css/img/box/margin-collapsing-code.png" alt="margin-collapsing-code"> <br><br>

        <li><b class="topic">Shorthands</b> - CSS xossalarining qiymatlarini qisqartirilgan ko'rinishda yozish <br></li>
        <img src="/css/img/box/shorthands-1.png" alt="shorthands-1"> <br>
        <li><b><i>Faqatkina ma'lum bir tomoniga chegara berish</i></b></li>
        <img src="/css/img/box/shorthands-2.png" alt="shorthands-2"> <br><br>

        <li><b class="topic">Margin/Padding</b></li>
        <br>
        <img src="/css/img/box/margin-padding.png" alt="margin-padding"> <br><br>

        <ol>
            <li><b>Hamma tarafga bir xil masofa berish</b></li>
            <img src="/css/img/box/margin-padding-1.png" alt="margin-padding-1"> <br><br>

            <li><b>top/bottom va left/right masofa berish</b></li>
            <img src="/css/img/box/margin-padding-2.png" alt="margin-padding-2"> <br><br>

            <li><b>top va left/right va bottom masofa berish</b></li>
            <img src="/css/img/box/margin-padding-3.png" alt="margin-padding-3"> <br><br>

            <li><b>top,left,right,bottom masofa berish</b></li>
            <img src="/css/img/box/margin-padding-4.png" alt="margin-padding-4"> <br><br>
        </ol>

        <b class="topic">!!! 'Padding'ni ham hudda shunday qisqartma ko'rinishida yozish mumkun</b>
        <br><br><br>
    </ul>
</div>

<div>
    <ul>
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br><br>

        <li><b class="topic">Height</b> - elementning balandligi</li>
        <img src="/css/img/box/height-pixel.png" alt="height-pixel"> <br><br>

        <li><b><i>Sahifamizning toliq balanligini band qilish uchun</i></b></li>
        <img src="/css/img/box/height-100%25.png" alt="height-100%"> <br><br>

        <li><b class="topic">Max-height</b> - element ega bo'lishi mumkun bo'lgan eng katta balandlik qiymatini belgilaydi (ko'rsatilgan balandlik qiymatidan kichkina bolishi mumkun, lekin katta emas)</li>
        <img src="/css/img/box/max-height.png" alt="max-height"> <br><br>

        <li><b class="topic">Min-height</b> - element ega bo'lishi mumkun bo'lgan eng kichik balandlik qiymatini belgilaydi (ko'rsatilgan balandlik qiymatidan katta bolishi mumkun, lekin kichik emas)</li>
        <img src="/css/img/box/min-height.png" alt="min-height"> <br><br>

        <li><b class="topic">Width</b> - elementning kengligi</li>
        <img src="/css/img/box/height-pixel.png" alt="width-pixel"> <br><br>

        <li><b><i>Sahifamizning toliq kengligini band qilish uchun</i></b></li>
        <img src="/css/img/box/width-100%25.png" alt="height-100%" width="493"> <br><br>

        <li><b class="topic">Max-width</b> - element ega bo'lishi mumkun bo'lgan eng katta kenglik qiymatini belgilaydi (ko'rsatilgan kenglik qiymatidan kichkina bolishi mumkun, lekin katta emas)</li>
        <img src="/css/img/box/max-width.png" alt="max-width"> <br><br>

        <li><b class="topic">Min-width</b> - element ega bo'lishi mumkun bo'lgan eng kichik kenglik qiymatini belgilaydi (ko'rsatilgan kenglik qiymatidan katta bolishi mumkun, lekin kichik emas)</li>
        <img src="/css/img/box/min-width.png" alt="min-width"> <br><br>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Block element</b> - ota-ona (parent) elementni to'liq kengligiga yoyiladi va har doim yangi qatordan boshlanadi. &lt;div&gt;, &lt;h1&gt;-&lt;h6&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt; va h.k.</li>
        <img src="/css/img/display/block-element.png" alt="block-element"> <br><br>

        <li><b class="topic">Inline element</b> - contentka yetarli boladigan kenglikga yoyiladi va yangi qatordan boshlanmaydi. &lt;span&gt;, &lt;a&gt;, &lt;br&gt;, &lt;em&gt;, &lt;img&gt; va h.k.</li>
        <img src="/css/img/display/inline-element.png" alt="inline-element"> <br><br>

        <li><b class="topic">Display</b> - elementni web-sahifada qanday korsatishni belgilaydi</li>
        <ol>
            <li><b><i>block</i></b> - element, block elementiga xos xususiyatga ega boladi</li>
            <img src="/css/img/display/display-block.png" alt="display-block"> <br><br>

            <li><b><i>inline</i></b> - element, inline elementiga xos xususiyatga ega boladi</li>
            <img src="/css/img/display/inline-element.png" alt="display-inline"> <br><br>

            <li><b><i>Inline-block</i></b> - inline elementiga o'xshab faqatkina contenti uchun yetarli boladigan kenglikka ega boladi va yonma-yon joylashadi.
                Qo'shimcha ravishda, block elementka o'xshab <b>width, height, margin/bottom-top, margin/padding-bottom</b> xossalarini qabul qilish mumkun boladi</li>
            <img src="/css/img/display/inline-block.png" alt="inline-block"> <br><br>

            <li><b><i>None</i></b> - elementni web-sahifadan berkitib qoyadi</li>
            <img src="/css/img/display/display-none.png" alt="display-none"> <br><br>
        </ol>

        <li><b class="topic">Text-align</b> - element ichidagi matnning <b>gorizontal joylashuvini</b> belgilaydi</li>
        <ol>
            <li><b><i>left</i></b> - matinni chap tarafga tekislaydi</li>
            <img src="/css/img/text/text-align-left.png" alt="text-align-left"> <br><br>

            <li><b><i>center</i></b> - matinni markazga tekislaydi</li>
            <img src="/css/img/text/text-align-center.png" alt="text-align-center"> <br><br>

            <li><b><i>right</i></b> - matinni o'ng tarafga tekislaydi</li>
            <img src="/css/img/text/text-align-right.png" alt="text-align-right"> <br><br>
        </ol>

        <li><b class="topic">Vertical-align</b> - element ichidagi matnning <b>vertikal joylashuvini</b> belgilaydi</li>
        <ol>
            <li><b><i>top</i></b> - elementni chiziqning tepa qismiga yoylashtiradi</li>
            <li><b><i>bottom</i></b> - elementni chiziqning pastki qismiga yoylashtiradi</li>
            <li><b><i>middle</i></b> - elementni chiziqning vertical markaziga yoylashtiradi</li>
            <img src="/css/img/text/vertical-align.png" alt="vertical-align"> <br><br>
        </ol>

        <li><b class="topic">Float</b> - elementni ota-onasining chap yoki ong tomoniga joylashtirib, matn va inline elementlarnini uning atrofini o'rashka(suzishka) ishlatiladi</li>
        <img src="/css/img/text/float.png" alt="float"> <br><br>
        <ol>
            <li><b><i>left</i></b> - elementni chap tarafga joylashtiradi va boshqa elementlarni suzib o'tishiga yordam beradi</li>
            <img src="/css/img/text/float-left.png" alt="float-left"> <br><br>

            <li><b><i>left</i></b> - elementni o'ng tarafga joylashtiradi va boshqa elementlarni suzib o'tishiga yordam beradi</li>
            <img src="/css/img/text/float-right.png" alt="float-right"> <br><br>
        </ol>

        <li><b class="topic">Text-decoration</b> - matnga qo'shimcha bezak qo'shish uchun ishlatiladi</li>
        <ol>
            <li><b><i>Underline</i></b> - matnni tagida chiziq hosil qiladi</li>
            <img src="/css/img/text/text-decoration-underline.png" alt="text-decoration-underline"> <br><br>

            <li><b><i>line-through</i></b> - matnni o'rasida chiziq hosil bo'ladi.</li>
            <img src="/css/img/text/text-decoration-line-through.png" alt="text-decoration-line-through-"> <br><br>

            <li><b><i>none</i></b> - matn hech qanday bezakka ega bo'lmaydi</li>
            <img src="/css/img/text/text-decoration-none.png" alt="text-decoration-underline-none"> <br><br>
        </ol>

        <li><b class="topic">Pseudo class</b> - elementning holatini aniqlash uchun ishlatiladi</li>
        <img src="/css/img/pseudo/pseudo-class.png" alt="pseudo-class"> <br><br>
        <ol>
            <li><b><i>hover</i></b> - elementning ustiga sichqoncha olibkelingan holat</li>
            <img src="/css/img/pseudo/pseudo-class.png" alt="pseudo-class"> <br><br>

            <li><b><i>active</i></b> - elementning ustiga sichqoncha bosib turilga holat</li>
            <img src="/css/img/pseudo/pseudo-class-active.png" alt="pseudo-class-active"> <br><br>

            <ul>
                <li><b><i><a href="https://www.w3schools.com/css/css_pseudo_classes.asp">Pseudo classes</a></i></b></li>
            </ul>
        </ol>

        <li><b class="topic">Grouping rules</b> - bir necha selectorlarni guruhlab, ularga bir CSS qoidasini(xossa) ko'rsatib o'tish</li>
        <img src="/css/img/grouping-rules.png" alt="grouping-rules"> <br><br>

        <li><b class="topic">Font-awesome</b> - CSS da yozilgan <b>font</b> va <b>icon</b>lar to'plami</li>
        <a href="https://fontawesome.com/"><b>Font-avesoma</b></a> <br>
        <a href="https://cdnjs.com/libraries/font-awesome"><b>CDNJS font-avesoma</b></a>

    </ul>
</div>

</body>
</html>


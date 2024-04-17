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

    <title>Fonts</title>
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

        <li><b class="topic">Fonts (Shrift)</b> - web sahifa uchun tog'ri fonts (shrift tanlash juda muhum)
            hisoblanasdi, chunki web sahifani qulay qilishda yordam beradi. <br>
            <b><i>Font</i></b>lar asosan <b><i>beshta</i></b> guruhka bo'linadi: <br><br>
            <img src="/css/img/fonts/fonts.png" alt="fonts"> <br><br>
            <img src="/css/img/fonts/serif__san-serif.png" alt="serif__san-serif"> <br><br>
            <img src="/css/img/fonts/font-style.png" alt="font-style"> <br><br>
        </li>

        <a href="https://zerogravitymarketing.com/sans-serif-readability/" target="_blank">Fontni aniqlash plagini</a><br><br>


        <h4>Web sahifa <span style="color: red">font-family</span> CSS xossasiga asoslanib shriftga ega boladi va uning <b>uch</b> hil
            korinishi mavjud:</h4>

        <ol>
            <li><b><i>font-family</i> hossasi ko'rsatilmagan</b> - brauzer <b>oldindan belgilab qo'yilgan (default)</b>
                shriftiga ega boladi. Bu ko'p hollarda <b>Times New Roman</b> shrifti hisoblanadi.
            </li>
            <br>

            <li><b><i>font-family</i> hossasi uchun font oilasi qiymat sifatidfa ko'rsatilgan</b> - brauzerining
                sozlamalar (setting) qismida font oilasi uchun ko'rsatilgan fontga ega boladi.
            </li>
            <br>

            <li><b><i>font-family</i> hossasi uchun malum bir font(lar) ko'rsatib o'tilgan
            </li>
            </b></b><br>
            <img src="/css/img/fonts/font-style.png" alt="font-style">
            <br>
        </ol>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Korsatib o'tilgan shrift olish uchun
            operatsion tizimga murojaat qiladi. Agar bu shrift operatsion tizimimda o'rnatilgan bolsa,
            bruzer sahifani shu shrift yordamida ekranga chiqaradi, aks holda keyingi ko'rsatilgan shrift yoki shriftlar
            oilasidan foydalanadi.</h3>
        <br>
        <li>
            <b class="topic"><a href="https://fonts.google.com/" target="_blank">Google fonts</a></b> - service yordamida web sahifaga
            turli fontlar qo'shish mumkun. Byning ikki xil yo'li mavjud <br><br>
            <ol>
                <li>fontni <b>download</b> qilib, keyin <b>install</b> qilish</li>
                <br>
                <img src="/css/img/fonts/fonts-link.png" alt="fonts-link"> <br><br>

                <li><b>&lt;head&gt;</b> qismiga <b><i>&lt;link&gt;</i></b> korinishida va <b>style</b> qismida <b><i>@import</i></b>
                    korinishida qoshish</li>
                <br>
                <img src="/css/img/fonts/fonts-import.png" alt="fonts-import"> <br><br>
            </ol>
        </li>

        <li><i class="fa fa-exclamation-circle" style="font-size:1rem;color:red"></i> Agar web sahifada <b>bold</b> yoki <i>italik</i>
        ko'rinishdagi matnlar ishlatiladigan bo'lsa, fontni tanlayotganda uning har xil korinishlari alohida ko'rsatilishi kerak.</li>
        <br><br>

        <li><i class="fa fa-exclamation-circle" style="font-size:1rem;color:red"></i> <b>Google fonts</b>ni ishlatish uchun, web sahifa har doim
            internetga ulangan bolishi kerak. <b>&lt;link&gt;</b> yo'ki <b>@import</b> yordamida font o'rnatilganda
            faqat kerakli hossalarinigina qoshish tavsiya etiladi,
            chunki web sahifani yuklashda tezlikka tasir qiladi.</li>
        <br><br>

        <a href="https://fonts.google.com/">Google fonts</a><br><br><br>

        <li><b class="topic">Local fonts</b> - kerakli fontlarni yaratib yoki kochirib olib, ularni ilovaga qoshib,
            web sahifaga <b>local font</b> korinishida ulash mumkun.<br>

            <img src="/css/img/fonts/local-font-1.png" alt="local-font-example"> <br><br>

            <h3>Font-face:</h3>
            <img src="/css/img/fonts/local-font-2.png" alt="local-font"> <br><br>

            <h3>Fonts-faces:</h3>
            <img src="/css/img/fonts/local-font-3.png" alt="local-fonts"> <br><br>

            <h3>Font file formatlari</h3>
            <img src="/css/img/fonts/font-types-2.png" alt="font-types-1"> <br><br>

            <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Bir @font-face uchun bir nechta formatdagi
                <b>font-family</b>larni korsatish mumkun. Bu yezerdagi muammolarni hal qiladi.</h3> <br>
            <img src="/css/img/fonts/font-types-2.png" alt="font-types-2"> <br><br>
        </li>

        <a href="https://transfonter.org/" target="_blank">Convert font type</a><br><br><br>

        <li><b class="topic">Font attributes (xossalari)</b></li><br>
        <ol>
            <li class="heading"><b>font-style</b> - matn stilini belgilaydi</li><br>
            <img src="/css/img/fonts/font-style-normal.png" alt="font-style-normal"> <br><br><br>
            <img src="/css/img/fonts/font-style-oblique-vs-italic.png" alt="font-style-oblique-vs-italic"> <br><br><br>
            <img src="/css/img/fonts/font-style-code.png" alt="font-style-code"> <br><br>

            <li class="heading"><b>font-weight</b> - matn qalinligini belgilaydi</li><br>
            <img src="/css/img/fonts/font-weight.png" alt="font-weight"> <br><br><br>
            <img src="/css/img/fonts/weight-types-1.png" alt="weight-types-1"> <br><br><br>
            <img src="/css/img/fonts/weight-types-2.png" alt="weight-types-2"> <br><br><br>

            <li class="heading"><b>line-height</b> - matn qatorining balandligini belgilaydi</li><br>
            <img src="/css/img/fonts/line-height.png" alt="line-height"> <br><br><br>
            <img src="/css/img/fonts/line-height-types.png" alt="line-height-types"> <br><br><br>
            <img src="/css/img/fonts/line-height-code.png" alt="line-height-code"> <br><br><br>

            <li class="heading"><b>letter-spacing</b> - matn simvollar orasidagi masofani belgilaydi</li><br>
            <img src="/css/img/fonts/letter-spacing.png" alt="letter-spacing"> <br><br><br>
            <img src="/css/img/fonts/letter-spacing-types.png" alt="letter-spacing-types"> <br><br><br>
            <img src="/css/img/fonts/letter-spacing-code.png" alt="letter-spacing-code"> <br><br>
        </ol>
    </ul>
</div>

</body>
</html>


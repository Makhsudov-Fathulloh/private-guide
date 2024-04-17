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
        <img src="/css/img/box/box-model.png" alt="box-model"> <br><br><br>

        <li><b class="topic">Flexbox</b> - float yoki position xossalari yordamisiz web sahifada moslashuvchan (flexible) layout yaratishda yordam beradi.
            Boshqacha qilib aytkanda, web sahifadagi elementlarni joylashtirish uchun xizmat qiladi.Flexbox 2ta asosiy elementdan tashkil topgan:
            <b>flex conrainer</b> va <b>flex items</b><br><br>

            <ol>
                <li><b class="heading">flex container</b> - display xossasi uchun <b>flex</b> qiymatiga ega bo'lgan elementga aytiladi.</li>
                <img src="/css/img/flexbox/flexbox-container.png" alt="flexbox-container"> <br><br>
                <img src="/css/img/flexbox/flexbox-container-1.png" alt="flexbox-container"> <br><br>
                <img src="/css/img/flexbox/flexbox-container-2.png" alt="flexbox-container"> <br><br>

                <li><b class="heading">flex items</b> - web sahifadagi flex container ota-onaga ega bo'lgan elementlar.</li>
                <img src="/css/img/flexbox/flex-items.png" alt="flex-items"> <br><br>
                <img src="/css/img/flexbox/flex-items-1.png" alt="flex-items-1"> <br><br>
                <img src="/css/img/flexbox/flex-items-2.png" alt="flex-items-2"> <br><br>
            </ol>
        </li>

        <h2><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Flexbox model asoslari:</h2>
        <img src="/css/img/flexbox/flex-container.png" alt="flex-model"> <br><br>
        <img src="/css/img/flexbox/flex-container-1.png" alt="flex-model"> <br><br>

        <h2><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Flexbox uchun ishlatiladigan CSS xossalari <span class="red">ikki</span> guruxka bolidadi:
            <span class="red">Flex container</span> va <span class="red">Flex items</span>.</h2>

        <li><b class="heading">Flex container</b></li><br>
        <ol>
            <li><b class="heading"><i>Flex direction</i></b> - asosiy o'qning yo'nalishini belgilab beradi va flex items shu oq'ga nisbatan joylashganligi uchun,
            ularning ham yo'nalishi belgilanadi.</li><br>
            <img src="/css/img/flexbox/flex-direction.png" alt="flex-direction"> <br><br>
            <img src="/css/img/flexbox/flex-direction(1).png" alt="flex-direction(1)"> <br><br>
            <img src="/css/img/flexbox/flex-direction(2).png" alt="flex-direction(2)"> <br><br>
            <img src="/css/img/flexbox/flex-direction-code.png" alt="flex-direction-code"> <br><br>


            <li><b class="heading"><i>Flex wrap</i></b> - odatda flex elementlar bitta linayada joylashadi lekin <b>flex wrap</b> yordamida bu holatni o'zgartirish mumkun.</li><br>
            <img src="/css/img/flexbox/flex-wrap.png" alt="flex-wrap"> <br><br>
            <img src="/css/img/flexbox/flex-wrap(1).png" alt="flex-wrap"> <br><br>
            <img src="/css/img/flexbox/flex-wrap(2).png" alt="flex-wrap"> <br><br>
            <img src="/css/img/flexbox/flex-wrap(3).png" alt="flex-wrap"> <br><br>
            <img src="/css/img/flexbox/flex-wrap-code.png" alt="flex-wrap-code"> <br><br>

            <li><b class="heading"><i>Flex flow</i></b> - <b><i>flex-direction</i></b> va <b><i>flex-wrap</i></b> xossalari uchun qisqartma (shorthand) hisoblanadsi.</li><br>
            <img src="/css/img/flexbox/flex-flow.png" alt="flex-flow"> <br><br>

            <li><b class="heading"><i>Justify content</i></b> - asosiy o'qi boylab elementlarni joylashuvini belgilaydi va qo'shimcha bo'sh joyni
                taqsimlab beradi.</li><br>
            <img src="/css/img/flexbox/justify-content/justify-content.png" alt="justify-content"> <br><br>
            <img src="/css/img/flexbox/justify-content/justify-content(1).png" alt="justify-content(1)"> <br><br>
            <img src="/css/img/flexbox/justify-content/justify-content(2).png" alt="justify-content(2)"> <br><br>
            <img src="/css/img/flexbox/justify-content/justify-content-code.png" alt="justify-content-code"> <br><br>

            <li><b class="heading"><i>Align items</i></b> - kesuvchi o'qi(cross axis) bo'ylab elementlarni joylashuvini belgilaydi.</li><br>
            <img src="/css/img/flexbox/align-items/align-items.png" alt="align-items"> <br><br>
            <img src="/css/img/flexbox/align-items/align-items(1).png" alt="align-items(1)"> <br><br>
            <img src="/css/img/flexbox/align-items/align-items(2).png" alt="align-items(2)"> <br><br>

            <li><b class="heading"><i>Align content</i></b> - kesuvchi o'qi(cross axis) bo'ylab flex container liniyalarni joylashuvini belgilaydi
            va qo'shimcha bo'sh joyni taqsimlaydi.</li><br>
            <img src="/css/img/flexbox/align-content/align-content.png" alt="align-content"> <br><br>
            <img src="/css/img/flexbox/align-content/1.png" alt="align-content: stretch"> <br><br>
            <img src="/css/img/flexbox/align-content/2.png" alt="align-content: flex-start"> <br><br>
            <img src="/css/img/flexbox/align-content/3.png" alt="align-content: flex-end"> <br><br>
            <img src="/css/img/flexbox/align-content/4.png" alt="align-content: center"> <br><br>
            <img src="/css/img/flexbox/align-content/5.png" alt="align-content: space-between"> <br><br>
            <img src="/css/img/flexbox/align-content/6.png" alt="align-content: space-around"> <br><br>
            <img src="/css/img/flexbox/align-content/7.png" alt="align-content: space-evenly"> <br><br>
            <img src="/css/img/flexbox/align-content/align-content-code(CSS).png" alt="align-content-code(CSS)"> <br><br>
            <img src="/css/img/flexbox/align-content/align-content(html).png" alt="align-content-code(html)"> <br><br>
        </ol>
        <br><br>

        <li><b class="heading">Flex items</b></li><br>
        <ol>
            <li><b class="heading"><i>Order</i></b> - flex container ichidagi flex items odatiy oqimga (flow) ko'ra joylashadi, yani HTML
                kodda birinchi yozilgan flex item web sahifada ham birinchi keladi, lekin <b>order</b> xossasi bu oqimni o'zgartirishi mumkun
                va flex items ketma-ketligini belgilab beradi.</li><br>
            <img src="/css/img/flexbox/flex-items/order(1).png" alt="flex-items"> <br><br>
            <img src="/css/img/flexbox/flex-items/order(2).png" alt="flex-items"> <br><br>
            <img src="/css/img/flexbox/flex-items/order(3).png" alt="flex-items"> <br><br>
            <img src="/css/img/flexbox/flex-items/order-code.png" alt="flex-items"> <br><br>

            <h2><i class="fa fa-exclamation-circle" style="font-size:1.5rem; color:red"></i> Order xossasi son ko'rinishidagi qiymat qabul qiladi va qiymat qancha kichik bo'lsa,
            flex item boshqa <b>item</b>lardan oldinroq keladi.</h2>

            <li><b class="heading"><i>Flex grow</i></b> - <b>flex item</b>ni kerak payti o'z o'lchovini qanday oshirishini belgilab beradi.
                U son korinishidagi qiymat qabul qilib bo'sh bo'lgan joyni qancha qismini egallashini korsatib beradi. <b>Default</b> qiymati 0 boladi.</li><br>
            <img src="/css/img/flexbox/flex-items/flex-grow.png" alt="flex-grow"> <br><br>

            <li><b class="heading"><i>Flex shrink</i></b> - <b>flex item</b>ni kerak payti o'z o'lchovini qanday oshirishini belgilab beradi.
                U son korinishidagi qiymat qabul qilib bo'sh bo'lgan joy qolmayotkan payti element qanday suratda kichrayishini belgilab beradi.
                <b>Default</b> qiymati 0 boladi.</li><br>
            <img src="/css/img/flexbox/flex-items/flex-shrink.png" alt="flex-shrink"> <br><br>

            <li><b class="heading"><i>Flex basis</i></b> - <b>flex item</b> uchun boshlang'ich o'lchovni belgilab beradi.
                Flex-direction ko'rsatilmagan yoki row ko'rsatilgan payti uning kengligini, column korsatilgan vaqti balandligini belgilab beradi.</li><br>
            <img src="/css/img/flexbox/flex-items/flex-basis.png" alt="flex-basis"> <br><br>

            <li><b class="heading"><i>Flex</i></b> - <b>flex-grov, flex-shrink</b> va <b>flex-basis</b> uchun qisqartma (shorthand).</li><br>
            <img src="/css/img/flexbox/flex-items/flex-model.png" alt="flex-model"> <br><br>
            <img src="/css/img/flexbox/flex-items/flex.png" alt="flex"> <br><br>

            <li><b class="heading"><i>Align self</i></b> - flex container ichidagi ko'rsatilgan <b>flex item</b>ni joylashuvini belgilaydi.
            Boshqacha qilib aytkanda <b>flex item</b> uchun <b>align items</b> xossasi hisoblanadi.</li><br>
            <img src="/css/img/flexbox/flex-items/align-self.png" alt="align-self"> <br><br>
            <img src="/css/img/flexbox/flex-items/align-self(1).png" alt="align-self(1)"> <br><br>
            <img src="/css/img/flexbox/flex-items/align-self(2).png" alt="align-self(2)"> <br><br>

        </ol>

    </ul>
</div>

</body>
</html>


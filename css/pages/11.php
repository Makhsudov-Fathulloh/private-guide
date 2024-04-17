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

    <title>CSS Grid</title>
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

        <li><b class="topic">CSS Grid</b> - to'rga (сетка) asoslangan layout bo'lib, float yoki position xossalari yordamisiz qatorlar
            va ustunlar yozdamida web sahifada layout yaratishda ishlatiladi. Boshqacha qilib aytkanda, web sahifadagi elementlarni
            joylashtirish
            uchun xizmat qiladi. CSS Grid <b>ikkita</b> asosiy elementdan tashkil topkan: <b>grid container</b> va
        <b>grid item</b></li><br><br>
        <ol>
            <li><b class="heading">Grid container</b> - display xossasi uchun <b>grid</b> yoki <b>inline-grid</b> qiymatig ega bo'lgan elementga aytiladi.</li>
            <img src="/css/img/css-grid/grid-container.png" alt="grid-container"> <br><br>
            <img src="/css/img/css-grid/grid-container-code.png" alt="grid-container-code"> <br><br>

            <li><b class="heading">Grid item</b> - web sahifadagi grid container ota-onaga ega bo'lgan elementlar.</li>
            <img src="/css/img/css-grid/grid-item.png" alt="grid-item"> <br><br>
            <img src="/css/img/css-grid/grid-item-code.png" alt="grid-item-code"> <br><br>
        </ol><br><br>

        <h2><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Grid containerning ikki asosiy xossasi mavjud: <span class="red">grid-template-columns</span> va <span class="red">grid-template-rows</span></h2>

        <ol>
            <li><b class="heading">Grid-template-columns</b> - container ichidagi ustunlar soni va uni uzunligini belgilashda ishlatiladi.</li>
            <img src="/css/img/css-grid/grid-template-columns.png" alt="grid-template-columns"> <br><br>
            <img src="/css/img/css-grid/grid-template-columns-code.png" alt="grid-template-columns-code"> <br><br>

            <li><b class="heading">Grid-template-rows</b> - container ichidagi qatorlar  balandligini belgilashda ishlatiladi.</li>
            <img src="/css/img/css-grid/grid-template-rows.png" alt="grid-template-rows"> <br><br>
            <img src="/css/img/css-grid/grid-template-rows-code.png" alt="grid-template-rows-code"> <br><br>
        </ol>

        <h2><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Grid itemga tegishli xossalaryordamida bir necha ustun va qatorlarni ko'rsatib o'tishimiz mumkun.
            Uning asosiy ikki xossasi mavjud: <span class="red">grid-column</span> va <span class="red">grid-row</span></h2>

        <ol>
            <li><b class="heading">Grid-column</b> - elemetn nechta ustunni o'z ichiga olishini belgilab beradi.</li>
            <img src="/css/img/css-grid/grid-column.png" alt="grid-column"> <br><br>
            <img src="/css/img/css-grid/grid-column-code.png" alt="grid-column-code"> <br><br>

            <li><b class="heading">Grid-row</b> - elemetn nechta qatorni o'z ichiga olishini belgilab beradi.</li>
            <img src="/css/img/css-grid/grid-row.png" alt="grid-row"> <br><br>
            <img src="/css/img/css-grid/grid-row-code.png" alt="grid-row-code"> <br><br>
        </ol>

        <a href="https://www.w3schools.com/css/css_grid.asp">w3schools CSS Grid</a><br>
        <a href="https://www.w3schools.com/css/css_grid_container.asp">w3schools CSS Grid Container</a><br>
        <a href="https://www.w3schools.com/css/css_grid_item.asp">w3schools CSS Grid Item</a><br>
        <a href="https://css-tricks.com/snippets/css/complete-guide-grid/">CSS-Tricks | A Complete Guide to CSS Grid </a>

    </ul>
</div>

</body>
</html>

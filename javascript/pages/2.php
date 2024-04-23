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

    <title>Basics (asoslar)</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/javascript/index.php">Javascript</a></b></li>
        <li><b><a href="/javascript/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <li><b class="topic">Values (qiymatlar)</b> - eng kichik ko'rinishdagi malumot, yoki malumot bo'lagi.</li><br>
        <img src="/javascript/img/basics/value.png" alt="value"> <br><br><br>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_variables.asp">Variable (uzgaruvchi)</a></b> - ozuda malum bir qiymatni saqlovchi container.</li><br>
        <img src="/javascript/img/basics/variable.png" alt="variable"> <br><br><br>

        <h3>O'zgaruvchilarni elon qilish.</h3>
        <img src="/javascript/img/basics/variable(1).png" alt="variable(1)"> <br><br><br>

        <li>(<b class="topic">!</b>) O'zgaruvchilarni e'lon qilingandan so'ng ishlatish mumkun. E'lon qilinmagan
            o'zgaruvchilarni ishlatish xatolikka olib keladi.</li><br>
        <img src="/javascript/img/basics/variable(2).png" alt="variable(2)"> <br><br><br>

        <li><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> O'zgaruvchilara nom berayotkanda, o'zida qanday malumot  saqlashini hisobga olib,
            berilgan nom saqlayotgan malumotni <b>ifoda etib</b> turishi kerak. O'zgaruvchilar odatda <b>camelCase</b> korinishida yoziladi.</li><br>
        <img src="/javascript/img/basics/variable(3).png" alt="variable(3)"> <br><br><br>
        <img src="/javascript/img/basics/variable(4).png" alt="variable(4)"> <br><br><br>

        <li><b class="topic"><a href="">Data types (malumot turlari)</a></b> - Javascriptda qiymatlar ikki guruhga bo'linadi: <b>primitive</b> va <b>object</b></li><br>

        <li><b class="heading"><a href="https://www.geeksforgeeks.org/primitive-and-non-primitive-data-types-in-javascript/">primitive</a></b> - tog'ridan-tog'ri
            o'zgaruvchi murojaat qiladigan manzilda joylashadi.</li><br>
        <img src="/javascript/img/basics/data-types(1).png" alt="data-types(1)"> <br><br><br>
        <img src="/javascript/img/basics/data-types(2).png" alt="data-types(2)"> <br><br><br>

        <li><b class="heading"><a href="https://www.w3schools.com/js/js_objects.asp">object</a></b> - o'zgaruvchi murojaat qilgan manzilda, ko'rsatilgan boshqa manzilda saqlanadi
            <b>(function, array, object)</b>.</li><br>

        <div><i class="fa fa-lightbulb-o" style="font-size:20px;color:red"></i> Javascript <b>dynamic</b> typing funksiyasiga ega bo'lib uning,
        malumot turini ko'rsatmastan xam saqlashimiz mumkun.</div><br>
        <img src="/javascript/img/basics/typeof.png" alt="typeof"> <br><br><br>

        <div><i class="fa fa-lightbulb-o" style="font-size:20px;color:red"></i> Javascript <b>dynamic</b> typing funksiyasiga ega bo'lib uning,
            malumot turini ko'rsatmastan xam saqlashimiz mumkun.</div><br>

        <div><span class="red">O'zgaruvchilarni</span> uch xil usulda elon qilish mavjud: <b>let</b>, <b>const</b> va <b>var</b> kalit so'zlaridan foydalanib amalga oshiriladi.
            <b>let</b> va <b>const</b> <span class="red">ES6</span>da taqdim etilgan.</div><br>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_let.asp">let</a></b> - dastur ishlashi davomida o'zgarishi mumkun bo'lgan o'zgaruvchilar
            e'lon qilish uchun ishlatildi. Elon qilinib bo'lingan bo'lingan o'zgaruvchi qiymatini o'zgartirishda hech qanday kalit so'zdan foydalanilmaydi.</li><br>
        <img src="/javascript/img/basics/let.png" alt="let"> <br><br><br>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_const.asp">const</a></b> - dastur ishlashi davomida o'zgarmaydigan o'zgaruvchilar
            e'lon qilish uchun ishlatildi. <b>const</b> kalit so'zi orqali elon qilingan o'zgaruvchilar har doim boshlangich qiymatga ega bolishi shart.</li><br>
        <img src="/javascript/img/basics/const.png" alt="const"> <br><br><br>

        <li><b class="topic"><a href="https://www.w3schools.com/jsref/jsref_var.asp">var</a></b> - <b>ES6</b>ga qadar o'zgaruvchilar e'lon qilish uchun ishlatilgan kalit so'z.
            <b>let</b> bilan deyarli bir xil vazifani bajargan. <b>let</b> va <b>var</b> o'xshahsh bolishiga qaramastan, ularning malum bir farqlari mavjud.
            <b>var</b> orqali e'lon qilingan o'zgaruvchining <b>ko'rinish kolami (scope)</b> function darajasida. <b>let</b> esa <b>block</b> darajada ko'rinadi.</li><br>
        <img src="/javascript/img/basics/var.png" alt="var"> <br><br><br>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_strict.asp">Strict mode</a></b> - buning yordamida kodimizdagi xatolardan,
            tavsiya etilmagan usullardan xabardor bo'lish imkoniyati mavjud.</li><br>
        <img src="/javascript/img/basics/strict.png" alt="strict"> <br><br><br>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_operators.asp">Operatorlar</a></b> - bir yoki bir nechta <b>operanlar ustida amal bajaradi.</b>.</li><br>
        <img src="/javascript/img/basics/operator-model.png" alt="operator-model"> <br><br><br>
        <h2>Javascript dasturlash tilida quyidagi operatorlar turlari mavjud: <b>arithmetic, comparison, assignment, logical, ternary</b>.</h2>
        <ol>
            <li><b class="heading"> Arithmetic (arifmetik) operator</b> - ikki operand ustida arifmetik amallarini bajarish.</li><br>
            <img src="/javascript/img/basics/operators/arithmetic.png" alt="arithmetic"> <br><br><br>
            <img src="/javascript/img/basics/operators/arithmetic-matter.png" alt="arithmetic-matter"> <br><br><br>

            <li><b class="heading"> Comparison (solishtirish) operator</b> - ikki operand ustida solishtirish amallarini bajarish.</li><br>
            <img src="/javascript/img/basics/operators/comparison.png" alt="comparison"> <br><br><br>
            <img src="/javascript/img/basics/operators/comparison-matter.png" alt="comparison-matter"> <br><br><br>

            <li><b class="heading"> Assignment (tayinlash) operator.</b></li><br>
            <img src="/javascript/img/basics/operators/assignment.png" alt="assignment"> <br><br><br>
            <img src="/javascript/img/basics/operators/assignment-matter.png" alt="assignment-matter"> <br><br><br>

            <li><b class="heading"> Logical (mantiqiy) operator.</b></li><br>
            <ul>
                <li><b class="heading">Boolean logic (mantiq)</b> - algebraning bir qismi bo'lib, barcha qiymatlar <b>True (rost)</b> yoki
                    <b>False (yolgon)</b> qiymatlaridan tashkil topkan bo'ladi. Bu qiymatlar malum bir shartni tekshirishda ishlatiladi.
                    Bolean logic asosiy uchu operatordan tashkil topkan: <b>AND</b>, <b>OR</b> va <b>NOT</b>.</li><br>
                <img src="/javascript/img/basics/boolean/and.png" alt="and"> <br><br><br>
                <img src="/javascript/img/basics/boolean/or.png" alt="or"> <br><br><br>
                <img src="/javascript/img/basics/boolean/not.png" alt="not"> <br><br><br>
                <img src="/javascript/img/basics/boolean/matter.png" alt="matter"> <br><br><br>

                <li><b class="heading">Logical (mantiqiy) operator</b></li><br>
                <img src="/javascript/img/basics/boolean/logical-operators.png" alt="logical-operators"> <br><br><br>
                <img src="/javascript/img/basics/boolean/logical-operators-matter.png" alt="logical-operators-matter"> <br><br><br>
                <img src="/javascript/img/basics/boolean/logical-operators-mask.png" alt="logical-operators-mask"> <br><br><br>
            </ul>

            <li><b class="heading"> Ternary (uchlik) operator.</b></li><br>

            <a href="https://www.programiz.com/javascript/comparison-logical">JavaScript Comparison and Logical Operators</a><br><br><br>
        </ol>

        <li><b class="topic"><a href="https://www.w3schools.com/js/js_strings.asp">String</a></b> - belgilar ketma-ketligidan tashkil topgan malumot turi.
        Ularni <b>bittalik ('')</b> yoki <b>ikkitalik ("")</b> qoshtirnoqlardan foydalanib yaratiladi, odatda ikkitalik ("") qoshtirnoqlardan foydalaniladi.</li><br>
        <img src="/javascript/img/basics/string.png" alt="string"> <br><br><br>

        <li><b class="topic">Concatenation</b> - qo'shish operatori orqali, stringlarni qo'shish.</li><br>
        <img src="/javascript/img/basics/concatenation.png" alt="concatenation"> <br><br><br>

        <li><b class="topic">Template literals</b> - ES6 <b>template literals</b> ko'rinishida string yaratish imkoniyatini taqdim etti va ular <b>blacktick (``)</b>
            belgisidan foydalanib yaratiladi.</li><br>
        <img src="/javascript/img/basics/template-literals.png" alt="template-literals"> <br><br><br>

        <h3><a href="https://www.w3schools.com/js/js_type_conversion.asp">Change type (turni o'zgartirish)</a></h3>

        <ol>
            <li><b class="heading"><a href="https://www.programiz.com/javascript/type-conversion">Type conversion</a></b> - javascript dasturlash tilida saqlanayotkan
                ma'lumot turini bir korinishdan ikkinchi korinishga o'tkazish.</li><br>
            <img src="/javascript/img/basics/change-type/number.png" alt="conversion-number"> <br><br><br>
            <img src="/javascript/img/basics/change-type/string.png" alt="conversion-string"> <br><br><br>

            <li>(<b class="topic">!intervyu</b>)<b class="heading"> <a href="https://developer.mozilla.org/en-US/docs/Glossary/Type_coercion">Type coercion</a></b> - javascript
                dasturlash tilida operator turli xil qiymatlat ustida ish olib borayotkanda, ulardan birining avtomatik ravishda boshqa turga o'tishi.
                Yani malumot turini avtomatik ravishda bir ko'rinishdan ikkinchi ko'rinishga o'tishi</li><br>
            <img src="/javascript/img/basics/change-type/type-coercion.png" alt="type-coercion"> <br><br><br>


            <li>(<b class="topic">!intervyu</b>)<b class="heading"> <a href="https://www.freecodecamp.org/news/javascript-if-statement-equality-and-truthy-falsy/">Truthy va Falsy</a>
                </b> - javascript dasturlash tilida berilgan qiymatni <b>Boolean</b> ko'rinishiga o'tkazilganda, ular <b>Truthy</b> va <b>Falsy</b> ko'rinishiga keladi. <br>
                <b>Truthy</b> bu true (rost) qiymatiga ega bo'lgan malumotlar.<br>
                <b>Falsy</b> bu false (yolg'on) qiymatiga ega bo'lgan malumotlar.</li><br>
            <img src="/javascript/img/basics/change-type/truthy&falsy.png" alt="truthy&falsy"> <br><br><br>
            <img src="/javascript/img/basics/change-type/truthy&falsy-matter.png" alt="truthy&falsy--matter"> <br><br><br>
        </ol>

    </ul>
</div>

</body>
</html>


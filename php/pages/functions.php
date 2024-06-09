<?php

$title = "PhP function";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/php/index.php">PhP</a></b></li>
    </ul>

    <li><b class="topic">PhP functions:</b></li>
    <br>
    <ul>
        <li><b>echo</b> - berilgan malumotlarni ekranga chiqaruvchi function.</li>
        <li><b>print</b> - berilgan malumotlarni ekranga chiqaradi. print function emas.</li>

        <li><b>var_dump()</b> - berilgan parametr qiymati haqida malumot beradi.</li>
        <li><b>print_r()</b> - berilgan parametr qiymati haqida qisqaroq malumot beradi.</li>
        <li><b>isset()</b> - berilgan o'zgaruvchi mavjudligini va null emasligini tekshiradi tekshiradi.</li>
        <li><b>empty()</b> - berilgan o'zgaruvchi bo'shligini tekshiradi.</li><br>
        <img src="/php/img/functions.png" alt=""> <br><br><br>

        <li><b>is_string()</b> - berilgan parametr qiymati <b>string</b>ga tekshiradi.</li>
        <li><b>is_integer()</b> - berilgan parametr qiymati <b>integer</b>ga tekshiradi.</li>
        <li><b>is_bool()</b> - berilgan parametr qiymati <b>boolean</b>ga tekshiradi.</li>
        <li><b>is_null()</b> - berilgan parametr qiymati <b>null</b>ga tekshiradi.</li>
        <br>
        
        <li><b>gettype()</b> - berilgan parametr turini tekshiradi.</li>
        <li><b>settype()</b> - </li>

        <li><b>declare(strict_types = 1)</b> - php <b>code</b>ni <b>static</b>dan dynamic holatda o'tkazadi. Yani dynamicda malumot typeni majburiy berish kerak boladi.</li>
        <li><b>define()</b> - orqali constanta elon qilinadi, agar class ichida elon qilinsa const orqali elon qilinadi.
        </li><br><br>

        <li><b class="topic"><a href="https://www.php.net/manual/en/ref.math.php">Math</a> functions:</b></li>
        <ol><br>
            <li><b>abc()</b> - xar qanday sonni <b>musbat</b> songa aylantirib beradi.</li>
            <li><b>sqrt()</b> - ildizdan chiqarish.</li>
            <li><b>pow()</b> - ikkita parametr qabul qilib, birinchi paremetrni ikinchi parametr darajasini chiqaradi. Darajalar faqat butun son bolishi kerak.</li>
            <li><b>ceil()</b> - berilgan sonni o'zidan keyingi katta songa yaxlitlab (butunlab) beradi (1.000000000000001 = 2, 1.0000000000000001 = 1).</li>
            <li><b>floor()</b> - berilgan sonni pastka qarab yaxlitlab (butunlab) beradi (1.9999999999999998 = 1, 1.9999999999999999 = 2).</li>
            <li><b>round()</b> - 0.4 -> 0.4999999999999999 = 0 gacha berilgan sonni pastka qarab yaxlitlab (butunlab) beradi,
                0.49999999999999991 -> 0.5 = 1 berilgan sonni o'zidan keyingi katta songa yaxlitlab (butunlab) beradi).
                Ikkinchi parametr sifatida nechanchi xonadan yaxshlitlashini korsatish mumkun</li>
            <li><b>pi()</b> - pi soni.</li>
            <li><b>max()</b> - sonlar toplami orasidan eng kattasini oladi.</li>
            <li><b>min()</b> - sonlar toplami orasidan eng kichigini oladi.</li>
            <li><b>rand()</b> - tasodifiy butun son xosil qiladi. Ikkita parametr berish mumkun, masalan: a dan b gacha bolgan sonlar ichidagi tasodifiy sonni oladi.</li>
            <li><b>mt_rand()</b> - rand() bilan birxil. Farqi algoritimida, biroz tezroq ishlaydi0.</li>
        </ol><br><br>

        <li><b class="topic"><a href="https://www.php.net/manual/en/ref.math.php">String</a> functions:</b></li><br>
        <ol>
            <li><b>strlen()</b> - matndagi baytlar sonini qaytaradi (english).</li>
            <li><b>strtolower()</b> - barcha harflarni kichik harfga o'zgartitirb beradi.</li>
            <li><b>strtoupper()</b> - barcha harflarni katta harfga o'zgartitirb beradi.</li>
            <li><b>ucfirst()</b> - matnni birinchi harfini katta harfga o'zgartitirb beradi.</li>
            <li><b>substr()</b> - matndan berilgan pozitsiyadan boshlab, kerakli miqdorini olib beradi.
                Ikkinchi parametr (oldidan) agar manfiy bolsa orqadan, uchinchi parametr (orqadan) sifatida berilgan navbat) </li>
            <li><b>strtpos()</b> - berilgan matn ichida so'ralgan matinni birinchi kelgan indeksini aniqlaydi.
                Ikkinchi parametr sifatida qaysi indeksdan qidiruvni boshlash kerakligini belgilash mumkun.</li>
            <li><b>strrpos()</b> - berilgan matn ichida so'ralgan matinni ongtomondan birinchi kelgan indeksini aniqlaydi. (strripos(), stripos()).</li>
            <li><b>str_shuffle()</b> - matndagi harflarni random orqali turgan ornini almashtiradi.</li>
            <li><b>str_replace()</b> - ko'rsatilgan matnni berilgan matnga almashtiradi, nechta bolsa hammasini almashtiradi. Birinchi parametr - matn qismi,
                ikkinchi parametr - yangi matn, uchunchi parametr - matn o'zgaruvchisi(nomi), (tortinchi parametr almashinishlar soni, boror o'zgaruvchiga olinadi $count=0;).</li>
            <li><b>md5()</b> - md5 algoritm boyicha shifrlab beradi.</li>
            <li><b>htmlspecialchars()</b> - matndagi <b>simbol</b> yoki <b>html tag</b>larni matn korinishda chiqarib beradi.</li>
            <li><b>strip_tags()</b> - matndan <b>html tag</b>larni olib tashlaydi. Ikkinchi parametrda qoldirish kerak bolgan <b>html tag</b>lar ko'rsatiladi.</li>
            <li><b>substr_count()</b> - berilgan qiymat matnda nechta joyda borligi aniqlaydi. birinchi parametrda - matn, Ikkinchi parametrda so'ralyotgan matn,
                (uchunchi parametr - qidiruvni boshlanish indeksi).</li>
            <li><b>trim()</b> - matnning ikki tarafidan probel yoki beldilarni olib tashlaydi. (ltrim(), rtrim()).</li>
            <li><b>str_word_count()</b> - matndagi sozlar sonini aniqlaydi. agar soz orasiga raqam aralashsa, raqam qoshilgan so'zni ikkita xarf deb hisoblaydi.</li>
            <li><b>strstr()</b> - matndan berilgan qiymatni qidiradi, topilgan qiymatdan boshlab oxirigacha matn qismini qaytaradi.
                birinchi parametrda - matn, Ikkinchi parametrda so'ralyotgan matn, (uchunchi parametrga <b>true</b> berilsa qidirilayotkan qiymatgacha bolgan matnni qaytaradi).</li>
            <li><b>strtotime()</b> - harqandav vaqtni secund formatiga otkazib beradi.</li>
        </ol>

        <img src="/php/img/" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>


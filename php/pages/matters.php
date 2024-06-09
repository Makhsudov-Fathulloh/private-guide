<?php

$title = "Matters";
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
        <h3>Operatorlar.</h3>
        <img src="/php/img/matters/operator-1.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                // Masala 1
                $son = 5;
                echo "$son\n";

                // Masala 2
                $x = 10;
                $y = 15;
                echo "x=$x y=$y\n";

                // Masala 3
                $x = 10;
                $y = 15;
                $z = $x + $y;
                echo "\$z qiymati: $z\n";

                // Masala 4
                $a = 20;
                $b = 5;
                echo "Yig'indisi: " . ($a + $b) . "\n";
                echo "Ayirmasi: " . ($a - $b) . "\n";
                echo "Ko'paytmasi: " . ($a * $b) . "\n";
                echo "Bo'linmasi: " . ($a / $b) . "\n";

                // Masala 5
                $a = 10;
                $b = 15;
                $c = 20;
                echo "Yig'indisi: " . ($a + $b + $c) . "\n";
                echo "Ayirmasi: " . ($a - $b - $c) . "\n";
                echo "Ko'paytmasi: " . ($a * $b * $c) . "\n";

                // Masala 6
                $son1 = 17;
                $son2 = 5;
                $qoldiq = $son1 % $son2;
                echo "Qoldiq: $qoldiq\n";

                // Masala 7
                $son1 = 17;
                $son2 = 5;
                $qoldiq = $son1 % $son2;
                $result = $son1 + $qoldiq;
                echo "Natija: $result\n";
            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/operator-2.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                // Masala 1
                $a = 5;
                $b = 10;

                $temp = $a;
                $a = $b;
                $b = $temp;

                echo "Yangi A qiymati: $a\n";
                echo "Yangi B qiymati: $b\n";

                // Masala 2
                $son = 56;
                $birinchi_raqam = floor($son / 10);
                $ikkinchi_raqam = $son % 10;
                $yigindi = $birinchi_raqam + $ikkinchi_raqam;
                echo "Raqamlar yig'indisi: $yigindi\n";

                // Masala 3
                $son = 357;
                $yuzlar_xonasidagi_raqam = floor($son / 100) % 10;
                echo "Yuzlar xonasidagi raqam: $yuzlar_xonasidagi_raqam\n";

                // Masala 4
                $son = 357;
                $teskari_son = 100 * ($son % 10) + 10 * (floor($son / 10) % 10) + floor($son / 100);
                echo "Teskari tartibdagi son: $teskari_son\n";

                // Masala 5
                $N = 86295;
                $soat = floor($N / 3600);
                $minut = floor(($N % 3600) / 60);
                $sekund = $N % 60;
                echo "Kun boshidan $soat soat, $minut daqiqa, $sekund soniya o'tdi.\n";

                // Masala 6
                $xona_yuqori = 17;
                $xona_chap = 25;
                $kafel_tomon = 100;
                $nechta_kafel = ceil(($xona_yuqori * 2 + $xona_chap * 2) / $kafel_tomon);
                echo "Kafel nechtasi kerak: $nechta_kafel\n";

                // Masala 7
                $xona_yuqori = 17;
                $xona_chap = 24;
                $kafel_tomon = 80;
                $nechta_kafel = floor(($xona_yuqori * 2 + $xona_chap * 2) / $kafel_tomon);
                echo "Butun kafel ishlatilganlar soni: $nechta_kafel\n";

                // Masala 8
                $xona_yuqori = 17;
                $xona_chap = 24;
                $kafel_tomon = 80;
                $sarishtirilgan_yuzi = ($xona_yuqori * $xona_chap) - ($nechta_kafel * $kafel_tomon ** 2);
                echo "Sarishtirilmaydigan qismin yuzi: $sarishtirilgan_yuzi\n";
            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/operator-3.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                // Masala 1
                $xona_balandligi = 2.7;
                $xona_tomonlari = array(5, 3);
                $rulon_uzunligi = 10;
                $rulon_eni = 1.15;

                // Xonaning yuzasi
                $xona_yuzasi = $xona_tomonlari[0] * $xona_tomonlari[1];

                // Oboy uzunligi
                $oboy_uzunligi = ceil($xona_balandligi * 100 / $rulon_eni); // metrlar => sm
                $rulonlar_soni = ceil($oboy_uzunligi / $rulon_uzunligi);

                echo "Kerak bo'lgan rulonlar soni: $rulonlar_soni\n";
                echo "Kerak bo'lgan oboy uzunligi: $oboy_uzunligi sm\n";

                // Masala 2
                $devorlar_tomonlari = array(5, 3);
                $gusht_baladli = 10;
                $gusht_uzunligi = 25;
                $gusht_eni = 12;
                $devor_qalinligi = 25;

                // G'ishtlar yuzasi
                $gusht_yuzasi = $gusht_uzunligi * $gusht_eni;

                // Devorlar yuzasi
                $devorlar_yuzasi = 2 * ($devorlar_tomonlari[0] * $xona_balandligi + $devorlar_tomonlari[1] * $xona_balandligi);

                // G'ishtlar soni
                $gushtlar_soni = ceil($devorlar_yuzasi / $gusht_yuzasi);

                echo "Kerak bo'lgan g'ishtlar soni: $gushtlar_soni\n";

                // Masala 3
                $K = 112;
                $hafta_kunlari = array("yakshanba", "dushanba", "seshanba", "chorshanba", "payshanba", "juma", "shanba");
                $yakshanba_kun = 0; // Yakshanba dushanbadan keyin keladi
                $to'g'ri_kun = ($K + $yakshanba_kun) % 7;

                echo "Berilgan K kunining to'g'ri kelishi: " . $hafta_kunlari[$to'g'ri_kun] . "\n";
            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/operator-4.1.png" alt=""> <br><br><br>
        <img src="/php/img/matters/operator-4.2.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                // Masala 1
                $A = 15;
                if ($A % 2 == 1) {
                    echo "$A toq son\n";
                } else {
                    echo "$A toq son emas\n";
                }

                // Masala 2
                $A = 13;
                $B = 14;
                if ($A > $B) {
                    echo "$A son $B sondan katta\n";
                } else {
                    echo "$A son $B sondan katta emas\n";
                }

                // Masala 3
                $A = 43;
                $B = 55;
                if ($A + $B > 100) {
                    echo "A va B sonlarining yig'indisi 100 dan katta\n";
                } else {
                    echo "A va B sonlarining yig'indisi 100 dan katta emas\n";
                }

                // Masala 4
                $A = 4;
                $B = 3;
                $C = 6;
                if ($C < $A || $C > $B) {
                    echo "C soni A va B sonlari orasida yotmaydi\n";
                } else {
                    echo "C soni A va B sonlari orasida yotadi\n";
                }

                // Masala 5
                $A = 10;
                $B = 15;
                if ($A % 2 == 1 || $B % 2 == 1) {
                    echo "A va B sonlarining hech bo'lmaganda 1 tasi toq\n";
                } else {
                    echo "A va B sonlarining hech bo'lmaganda 1 tasi toq emas\n";
                }

                // Masala 6
                $A = 14;
                if ($A > 9 && $A < 100 && $A % 2 == 0) {
                    echo "Berilgan son ikki xonali juft son\n";
                } else {
                    echo "Berilgan son ikki xonali juft son emas\n";
                }

                // Masala 7
                $X = 3;
                $Y = 5;
                if (($X + $Y) % 2 == 0) {
                    echo "Berilgan ($X, $Y) maydon OQ rangda\n";
                } else {
                    echo "Berilgan ($X, $Y) maydon Qora rangda\n";
                }

                // Masala 8, 9
                $x1 = 1;
                $y1 = 1;
                $x2 = 2;
                $y2 = 3;
                if (abs($x1 - $x2) == abs($y1 - $y2) || $x1 == $x2 || $y1 == $y2) {
                    echo "Bir maydondan ikkinchisiga o'ta oladi\n";
                } else {
                    echo "Bir maydondan ikkinchisiga o'ta olmaydi\n";
                }

                // Masala 10
                $N = 44;
                $color = "";
                $N %= 8; // to'rt kunlarga tegishli to'rt band
                if ($N <= 3) {
                    $color = "Yashil";
                } elseif ($N <= 5) {
                    $color = "Qizil";
                } else {
                    $color = "Sariq";
                }
                echo "Svetafor $N-daqiqasida $color yonadi\n";
            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/string-1.png" alt=""> <br><br><br>
        <img src="/php/img/matters/string-2.png" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
                // Masala 1
                $text = "Salom dunyo!";
                echo $text . "\n";

                // Masala 2
                $text1 = "Salom, ";
                $text2 = "dunyo!";
                echo $text1 . $text2 . "\n";

                // Masala 3
                $ism = "Eshmat";
                echo "$ism: " . strlen($ism) . "ta harfdan iborat\n";

                // Masala 4
                echo substr($ism, -3) . "\n";

                // Masala 5
                $text = "Bugun ob havo yaxshi";
                if (strpos($text, "havo") !== false) {
                    echo "Matnda 'havo' so`zi mavjud\n";
                } else {
                    echo "Matnda 'havo' so`zi mavjud emas\n";
                }

                // Masala 6
                $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                $parol = substr(str_shuffle($data), 0, 8);
                echo "8 xonali parol: $parol\n";

                // Masala 7
                $text = "Assalomu alaykum O'zbekiston";
                $new_text = str_replace("alaykum", "jonajon", $text);
                echo "$new_text\n";

                // Masala 8
                $email = "example@gmail.com";
                $domen = substr(strrchr($email, "@"), 1);
                echo "$domen\n";

                // Masala 9
                $qiymat = '000346023.24';
                echo ltrim($qiymat, '0') . "\n";

                // Masala 10
                $url = "https://kun.uz/50487176";
                $ajratilgan = substr($url, strrpos($url, '/') + 1);
                echo "$ajratilgan\n";

                // Masala 11
                $path = "/Users/sardordushamov/darslar/kurs/index.php";
                $file = substr(strrchr($path, "/"), 1);
                echo "$file\n";

                // Masala 12
                $matn = "112233";
                if (strlen($matn) == 6) {
                    $soat = substr_replace(substr_replace($matn, ":", 2, 0), ":", 5, 0);
                    echo "$soat\n";
                } else {
                    echo "Xatolik, to'g'ri soat kiritilmagan\n";
                }

                // Masala 13
                $telefon = "+998999999999";
                if (preg_match("/^\+998[913497][0-9]{7}$/", $telefon)) {
                    echo "Telefon raqam\n";
                } else {
                    echo "Telefon raqam emas\n";
                }

                // Masala 14
                $telefon = "+998999999999";
                if (preg_match("/^\+998(90|91)[0-9]{7}$/", $telefon)) {
                    echo "Beeline\n";
                } elseif (preg_match("/^\+998(93|94)[0-9]{7}$/", $telefon)) {
                    echo "Ucell\n";
                } elseif (preg_match("/^\+99897[0-9]{7}$/", $telefon)) {
                    echo "Mobiuz\n";
                } elseif (preg_match("/^\+99899[0-9]{7}$/", $telefon)) {
                    echo "Uzmobile\n";
                } else {
                    echo "Noma'lum kompaniya\n";
                }

            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">

            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">

            </pre>
            <br>
        </div>
        <br>

        <img src="/php/img/matters/" alt=""> <br><br><br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">

            </pre>
            <br>
        </div>
        <br>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>


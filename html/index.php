<?php

declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html> <?php // <!doctype html> bu tag emas statement(bayonot, biror narsani aniq ifodalash). Bu HTML5 versiyasini bildiradi ?>
<html lang="ru"> <?php // Hujjat struvturasi  ?>
<head>
    <title>HTML</title>
    <link rel="stylesheet" href="/html/css/style.css">
</head>

<body>
<h1>HTML</h1>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <br>

        <li><b class="topic">Browser</b> - web sahifalarni ochish uchun mahsus dastur, belganishlar tillarida (HTML,
            XHTML,
            XML) yozilgan
            'code'larni namoyon qiluvchi dasturiy taminot
        </li>
        <li><b class="topic">Domain</b> - sayt nomi</li>
        <li><b class="topic">Request</b> - web sahifani yuklash uchun, browser tomonidan yaratilgan maxsus so'rov</li>
        <li><b class="topic">Server</b> - tarmoqqa ulangan va doimiy ishlab turadigan kompyuter, U foydalanuvchidan
            kelayotkan so'rovlarni
            qabul qilib, qayta ishlab, tegishli javob jonatadi
        </li>
        <li><b class="topic">Response</b> - server tomonidan qabul qilib olingan so'rov uchun yaratilgan javob</li>
        <li><b class="topic">Developer tools</b> - dasrturchilar uchun mahsus instumrntlar toplami (F12)</li>
        <br>

        <li><b class="topic">Development environment</b> - dastur yozish va yaratish uchun to'plam (IDE, Browser)</li>
        <li><b class="topic">IDE (Integrated Development Environment)</b> - dasturlashni (code yozishni) osonlashtirib
            beradigan dastur
        </li>
        <br>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Tag ("&lt;tag&gt; ... &lt;/tag&gt;")</b> - web sahifada element yaratiladi. Tag &lt; &gt;
            belgilar orasida
            yoziladi &lt;/ &gt; bilan yopiladi
        </li>

        <li><b class="topic">Element</b> - "&lt;tag&gt; Content &lt;/tag&gt;"</li>
        <img src="/html/img/element.png" alt="element">

        <li><b class="topic">Empty elemet (bo'sh element)</b> - faqatkina ochuvch "&lt;tag&gt;" dan tashkil topadi</li>
        <p>
            <i>&lt;area&gt;, &lt;base&gt;, &lt;br&gt;, &lt;col&gt;, &lt;embed&gt;, &lt;hr&gt;, &lt;img&gt;, &lt;input&gt;,
                &lt;link&gt;, &lt;meta&gt;, &lt;source&gt;, &lt;track&gt;, &lt;wbr&gt;</i>
        </p>

        <li><b class="topic">Nested element (ichki element)</b> - element ichidagi element</li>
        <li><strong>Attribute</strong> - elementga qoshimcha malumot berish, o'zgartirish uchun ishlatiladi</li>
        <br>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Head elements (&lt;head&gt;)</b> - <b><i>&lt;title&gt;</i></b> web sahifa nomi beriladigan
            tag,
            <b><i>&lt;style&gt;</i></b>
            orqali internal style usuli web sahifaga style berishda ishlatiladi, <b><i>&lt;link&gt;</i></b> - hujjat
            qismi,

            <b><i>&lt;meta&gt;</i></b> hujjat asosiy qismidan tashqari qismi, <b><i>&lt;script&gt;</i></b> hujjatning
            pastki
            qismi
            <ul>
                <li><b><i>&lt;style&gt;&lt;/style&gt;</i></b> - tag ichidagi contentka style berishni uch xil usuli
                    mavjud
                    <ul>
                        <ol>
                            <li><b>Inline style (satrli)</b> - tag ning <b><i>style=""</i></b> attribute orqali style
                                berish
                            </li>
                            <img src="/html/img/style.png" alt="element" width="750"> <br>
                            <img src="/html/img/inline-style.png" alt="element">

                            <li><b>Internal style (ichki)</b> - <b><i>&lt;style&gt; ... &lt;/style&gt;</i></b> tagi
                                ichida
                                style
                                berish, bunda tag nomi, <b>id (unique) '#'</b> , <b>class '.'</b> orqali beriladi
                            </li>
                            <img src="/html/img/id.png" alt="element" width="750"> <br>
                            <img src="/html/img/class.png" alt="element" width="750"> <br>
                            <img src="/html/img/internal-style.png" alt="element">

                            <li><b>External style (tashqi)</b> <i>&lt;head&gt;&lt;link&gt;/style.css&lt;/link&gt;&lt;/head&gt;</i>
                                head tagi ichida link tagi orqali <b>CSS</b> formatida yozilgan faylni ulab, o'sha fayl
                                ichida style
                                beriladi
                            </li>
                            <img src="/html/img/external-style-2.png" alt="element">
                            <img src="/html/img/external-style-1.png" alt="element"> <br>
                        </ol>
                    </ul>
                </li>
                <br>

                <li><b><i>&lt;link&gt;</i> (ilovalar)</b> - ikki turga bolinadi <b>internal (local) links </b> va <b>External
                        links</b>.
                    Link yaratishda &lt;a &gt; &lt;/a&gt; tagi ishlatiladi, bu tagning majburiy <b>href=""</b> atributi
                    bor
                    <ul>
                        <ol>
                            <li><b>internal (local) link</b> - project ichidagi fayllarga o'tish</li>
                            <img src="/html/img/internal-link.png" alt="element"> relative path (nisbiy yo'l)

                            <li><b>External link</b> - tashqariga, boshqa saytlarga o'tish</li>
                            <img src="/html/img/external-link.png" alt="element"> absolute path (mutlaq yo'l) <br> <br>
                        </ol>
                        <ul>
                            <li><b><i>target="blank"</i></b> - boshqa page ga otishda, yangi oyna hosil qilish uchun
                                ishlatiladi. Bu <i>&lt;a&gt;&lt;/a&gt;
                                    tagining <b><i>target="_blank"</i> attributi ikkala linkdaham ishlatiladi </b></i>
                            </li>
                            <img src="/html/img/target_blank.png" alt="element">

                            <li><b><i>rel="icon"</i></b> - web-sahifaga nomi oldidan icon qoyishda link teging <b><i>rel="icon"</i></b>
                                attributidan foydalaniladi
                            </li>
                            <img src="/html/img/icon.png" alt="element">
                        </ul>
                    </ul>
                </li>
                <br>

                <li><b><i>&lt;meta&gt;</i></b> - tag web-sahifa haqida qoshimcha malumot kiritishda ishlatiladi,
                    attributlari <b><i>charset="UTF-8"</i></b> loyiha qaysi qadirofka yordamida yaratilganligini
                    korsatadi,
                    <b><i>name="keywords" content=""</i></b> web-sahiha haqida qoshimcha malumot kiritishda ishlatiladi,
                    bu
                    qidirish tizimlarida yuqori o'rinlarda chiqishi uchun yoziladi,<b><i>name="author"
                            content=""</i></b>
                    web-sahifa mualliflarini
                    korsatish mumkun,<b><i>name="description" content=""</i></b> web-sahifa nima haqda ekanligini
                    korsatish
                    mumkun,
                </li>
                <br>

                <li><b><i>&lt;script&gt;&lt;/script&gt;</i></b> - javascript 'code'ni ulashda ishlatiladi, bu ulashning
                    ikki
                    xil yoli bor:
                    <ul>
                        <ol>
                            <li><b> Internal script (ichki)</b> - &lt;script&gt;&lt;/script&gt; tag ichida javascript
                                'code'ni togridan togri yozish uchun ishlatiladi
                            </li>
                            <img src="/html/img/internal-script.png" alt="element">
                            <li><b> ecternal script (ichki)</b> -&lt;script&gt; src="/img/external-script.png" &lt;/script&gt;
                                head tagi ichida script tagi orqali
                                javascript formatida yozilgan faylni ulab, o'sha fayl ichida javascriptda yozilgan code
                                ishlatiladi
                            </li>
                            <img src="/html/img/external-script.png" alt="element">
                        </ol>
                    </ul>
                </li>
                <br>
        </li>
    </ul>
</div>


<div>
    <ul>
        <li><b class="topic">Semantic elements ('body'ning ichki qismi)</b> - <b><i>&lt;header&gt;</i></b> hujjat bosh
            qismi, <b><i>&lt;nav&gt;</i></b>
            menu qismi,
            <b><i>&lt;section&gt;</i></b> - hujjat qismi,
            <b><i>&lt;aside&gt;</i></b> hujjat asosiy qismidan tashqari qismi,
            <b><i>&lt;footer&gt;</i></b> hujjatning pastki qismi
        </li>
        <br>

        <li><b class="topic">Layout</b> - loyihalash (planirovka, maketlash)</li>
        <br>

        <header class="tiger">Header</header>
        <nav class="tiger">Nav</nav>
        <aside id="aside-right" class="tiger">Aside (Sitebar)</aside>
        <section class="tiger">Section</section>
        <aside id="aside-left" class="tiger">Aside (Sitebar)</aside>
        <footer class="tiger">Footer</footer>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Headings ("&lt;h1&gt;&lt;/h1&gt; - &lt;h6&gt;&lt;/h6&gt;")</b> - web sahifada sarlavhalar
            yoshish uchun tag
            h1 > h6. h1 ni 1 page 1 martta ishlatish tavsiya qilinadi
        </li>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <br>

        <li><b class="topic">Paragraph ("&lt;p&gt; ... &lt;/p&gt;")</b> - web sahifada matn yoshish uchun ishlatiladigan
            tag. 'Paragraph'lar har doyim xat boshidan (абзац) boshlanadi
        </li>
    </ul>
</div>
<br>

<div>
    <ul>
        <li><b class="topic">Formatting</b> - matnni formatlash</li>
        <div>
            <i>&lt;b&gt;&lt;/b&gt; and &lt;strong&gt;&lt;/strong&gt;</i> <b>bolt</b>,
            <i>&lt;i&gt;&lt;/i&gt; and &lt;em&gt;&lt;/em&gt;</i> <i>italik</i>,
            <i>&lt;mark&gt;&lt;/mark&gt;</i>
            <mark>mark</mark>
            <i>&lt;del&gt;&lt;/del&gt; and &lt;s&gt;&lt;/s&gt;</i>
            <del>del</del>
            <i>&lt;small&gt;&lt;/small&gt;</i> <small>small</small>
            <i>&lt;ins&gt;&lt;/ins&gt; and &lt;u&gt;&lt;/u&gt;</i>
            <ins>ins</ins>
            <i>&lt;sub&gt;&lt;/sub&gt;</i> sub<sub>script</sub>
            <i>&lt;sup&gt;&lt;/sup&gt;</i> super<sup>script</sup>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Comments</b> - Izohlar, bir qator ucun <i>&lt;!-- --&gt;</i> ko'p qator uchun <i>/* */</i>
        </li>
        <br>

        <li><b class="topic">Image (Rasm)</b> - <b>&lt;img&gt;</b> ni <b>alt=""</b> attributi mavjud, rasim yuklashda
            hatolik bolsa,
            o'rniga chiqadigan matn
        </li>
        <br>

        <li><b class="topic">Table (jadval)</b> - <b><i>&lt;thead&gt;</i></b> - table head, <b><i>&lt;tr&gt;</i></b> -
            table
            row <b><i>&lt;th&gt;</i></b>
            - table header row <b><i>&lt;tbody&gt;</i></b> - table body <b><i>&lt;tr&gt;</i></b> - table row
            <b><i>&lt;td&gt;</i></b>
            - table data
        </li>
        <br>

        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Qiziqishi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Eshmat</td>
                <td>26</td>
                <td>Dasturlash</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Toshmat</td>
                <td>25</td>
                <td>Suzish</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Boltavoy</td>
                <td>24</td>
                <td>O'qish</td>
            </tr>
            </tbody>
        </table>
    </ul>
</div>
<br>

<div>
    <ul>
        <li><b class="topic">Unordered list</b> - Tartibsiz jadval (nuqtalangan)</li>
        <ul>
            <li>Anor</li>
            <li>Olma</li>
            <li>Anjir</li>
            <li>Poliz</li>
        </ul>
        <br>

        <hr>

        <li><b class="topic">Ordered list</b> - Tartibli jadval (raqamlangan)</li>
        <ol>
            <li>Abdulloh</li>
            <li>Qosim</li>
            <li>Akbar</li>
        </ol>
    </ul>

    <ul>
        <li><b class="topic">Block element</b> - qatorni toliq egallaydi</li>
        <p>
            <i>
                &lt;address&gt;, &lt;aside&gt;, &lt;dd&gt;, &lt;div&gt;, &lt;dl&gt;, &lt;dl&gt;, &lt;dt&gt;, &lt;canvas&gt;,
                &lt;h1 - h6 &gt;, &lt;header&gt;, &lt;hr&gt;,
                &lt;article&gt;,&lt;li&gt;,&lt;main&gt;, &lt;nav&gt;, &lt;noscript&gt;, &lt;ol&gt;, &lt;pre&gt;, &lt;section&gt;,
                &lt;table&gt;, &lt;tfoot&gt;,
                <br> &lt;ul&gt;,&lt;video&gt;, &lt;form&gt;, &lt;figcaption&gt;, &lt;fieldset&gt;, &lt;figure&gt;, &lt;footer&gt;
            </i>
        </p>
        <li><b class="topic">Inline element</b> - element xajmigaqarab, o'ziga mos bolgan joyni egallaydi</li>
        <p>
            <i>
                &lt;a&gt;, &lt;abbr&gt;, &lt;b&gt;, &lt;bdo&gt;, &lt;big&gt;, &lt;br&gt;, &lt;button&gt;, &lt;cide&gt;,
                &lt;code&gt;,
                &lt;dfn&gt;, &lt;em&gt;, &lt;em&gt;,
                &lt;i&gt;, &lt;img&gt;, &lt;input&gt;, &lt;kbd&gt;, &lt;label&gt;, &lt;map&gt;, &lt;object&gt;, &lt;output&gt;,
                &lt;q&gt;, &lt;samp&gt;, &lt;script&gt;, <br>
                &lt;select&gt;, &lt;small&gt;, &lt;span&gt;, &lt;strong&gt;, &lt;sub&gt;, &lt;sup&gt;,&lt;time&gt;, &lt;textarea&gt;,
                &lt;var&gt;,
            </i>
        </p>

        <li><b class="topic">&lt;div&gt;</b> - conteynerlovchi block element</li>
        <li><b class="topic">&lt;span&gt;</b> - conteynerlovchi inline element</li>
    </ul>
</div>
<br>

<div>
    <ul>
        <li><b class="topic">Form (forma)</b> - HTML formasi foydalanuvchi ma'lumotlarini yig'ish, va serverga yuborib
            qayta
            ishlash uchun
            ishlatiladi
        </li>
        <div>
            <b><i>&lt;input&gt;</i></b> - matn, parol, elektron pochta va h.k. kabi har xil turdagi malumotlarni
            kiritish va
            oʻzgartirish uchun foydalaniladi, uning <b><i>type=""</i></b> nomli majburish attributi bor <br>
            <b><i>&lt;label&gt;</i></b> - forma elementlari nomlash belgini uchun ishlatiladi, uning
            <b><i>for=""</i></b>
            attributidagi qiymat <b><i>&lt;input&gt;</i></b> ning <b><i>id=""</i></b> attribut qiymati bilan birhil
            bo'lish
            kerak <br>
            <b><i>&lt;button&gt;</i></b> - orqali malumotlarni serverga yuborishda ishlatiladi, uchta biror funksiya
            bajarishda ishlatiladi,
            uning ikkita attributlari mavjud
            <ol>
                <li><b><i>&lt;submit&gt;</i></b> - malumotlarni yuborish funksiyasini bajaradi</li>
                <li><b><i>&lt;reset&gt;</i></b> - forma malumotlarni yangilash funksiyasini bajaradi</li>
                <li><b><i>&lt;button&gt;</i></b> - javascript orqali yozilgan funksiyani ishlatishda foydalaniladi</li>
            </ol>
            <b><i>&lt;select&gt;</i></b> - ochiladigan roʻyxatni yaratish uchun foydalaniladi. uning <b><i>&lt;select
                    multiple&gt;</i></b> attributi
            birneshda variantlarni tanlashda ishlatiladi, tanlash uchun <b>Shift</b> yoki <b>Ctrl</b> tugmalari bilan
            birga
            bosiladi<br>
            <b><i>&lt;option&gt;</i></b> - ochiladigan roʻyxatdagi variantlarni tanlash uchun foydalaniladi. <br>
            <b><i>&lt;textarea&gt;</i></b> - uzun matnli tarkibni olish uchun foydalaniladi, attributlari
            <b><i>cols=""</i></b>
            va <b><i>rows=""</i></b> <br>
            <b><i>&lt;fieldset&gt;</i></b> - boshqa shakl elementlari atrofida quti chizish va tegishli ma'lumotlarni
            guruhlash uchun ishlatiladi.<br>
            <b><i>&lt;legend&gt;</i></b> - u maydonlar majmuasi elementlari uchun sarlavhani belgilaydi<br>
            <b><i>&lt;datalist&gt;</i></b> - kiritish boshqaruv elementlari uchun oldindan belgilangan roʻyxat
            opsiyalarini
            belgilash uchun ishlatiladi <br>
            <b><i>&lt;output&gt;</i></b> - bajarilgan hisob-kitoblarning natijasini ko'rsatadi. <br>
            <b><i>&lt;optgroup&gt;</i></b> - ochiladigan ro'yxatda guruhga oid variantlarni aniqlash uchun ishlatiladi.
            <br>
        </div>
        <br>

        <li><b class="topic">Input types</b> - input turlari</li>
        <div>
            <b><i>&lt;input type="button"&gt;</i></b> - <br>
            <b><i>&lt;input type="checkbox"&gt;</i></b> - tasdiq belgisi, birnecha martta tanlash imkonini beradi,
            <b><i>checked=""</i></b>
            default holatda belgilash <br>
            <b><i>&lt;input type="color"&gt;</i></b> -
            <b><i>&lt;input type="date"&gt;</i></b> - calendar chiqarish uchun ishlatiladi<br>
            <b><i>&lt;input type="datetime-local"&gt;</i></b> - <br>
            <b><i>&lt;input type="email"&gt;</i></b> - <br>
            <b><i>&lt;input type="file"&gt;</i></b> - fayl kirirish uchun ishlatiladi<br>
            <b><i>&lt;input type="image"&gt;</i></b> - <br>
            <b><i>&lt;input type="month"&gt;</i></b> - <br>
            <b><i>&lt;input type="number"&gt;</i></b> - integer turidagi malumotni yozish uchun ishlatiladi<br>
            <b><i>&lt;input type="password"&gt;</i></b> - parol kirirish uchun ishlatiladi<br>
            <b><i>&lt;input type="placeholder"&gt;</i></b> - qanday malumot kiririshni korsatib turish uchun ishlatiladi<br>
            <b><i>&lt;input type="radio"&gt;</i></b> - faqat bitta variantni tanlash imkonini beradi,
            <b><i>checked=""</i></b>
            attribut qiymatlari birhil bolishi kerak <br>
            <b><i>&lt;input type="range"&gt;</i></b> - <br>
            <b><i>&lt;input type="reset"&gt;</i></b> - <br>
            <b><i>&lt;input type="search"&gt;</i></b> - <br>
            <b><i>&lt;input type="submit"&gt;</i></b> - <br>
            <b><i>&lt;input type="tel"&gt;</i></b> - <br>
            <b><i>&lt;input type="text"&gt;</i></b> - strinh turidagi malumotni yozish uchun ishlatiladi,
            <b><i>size=""</i></b>
            attributi kiritiladigan belgilar sonini chegaralash uchun ishlatiladi <b><i>value=""</i></b> default holatda
            yozib qoyish uchun ishlatiladi<br>
            <b><i>&lt;input type="time"&gt;</i></b> - <br>
            <b><i>&lt;input type="hidden"&gt;</i></b> - <br>
            <b><i>&lt;input type="url"&gt;</i></b> - <br>
            <b><i>&lt;input type="week"&gt;</i></b> - <br>
        </div>
        <br>

        <form action="action.php" method="Get">
            <fieldset>
                <legend>User form</legend>
                <label for="Username"> Username</label>
                <input type="text" name="Username" id=Username> <br><br>
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password"> <br><br>
                <label for="e-mail">e-mailingiz</label>
                <input type="email" name="e-mail" id="e-mail"> <br><br>
                <label for="sana">Tugilgan sana</label>
                <input type="date" name="date" id="sana"> <br><br>
                <label for="Student">Talabamisiz</label>
                <input type="checkbox" name="Student" id="Student"> <br><br>
                <hr>
                <label for="Erkak">Erkak</label>
                <input type="radio" name="gender" value="male">
                <label for="Ayol">Ayol</label>
                <input type="radio" name="gender" value="female">
                <label for="Berilmagan">Berilmagan</label>
                <input type="radio" name="gender" value="No gender"> <br><br>
                <label for="Passport">Passport</label>
                <input type="file" name="Passport" id="Passport"> <br><br>
                <hr>
                <label for="tajriba">Tajribangiz (yil)</label>
                <select name="experiense" id="tajriba">
                    <option value="0">Tajribam yo'q</option>
                    <option value="1">Tajribam 1</option>
                    <option value="2">Tajribam 2</option>
                    <option value="3">Tajribam 3</option>
                </select> <br><br>
                <label for="haqingizda">Siz haqingizda</label> <br><br>
                <textarea name="about" id="haqingizda" rows="10" cols="45"></textarea> <br><br>
                <button type="submit">Выполнить</button>
            </fieldset>
        </form>
    </ul>
</div>
<br>

<div>
    <ul>
        <li><b class="topic">&lt;audio&gt; web-sahifaga audio yuklash</b> - audio yuklashda <i>&lt;audio&gt;</i> tagi
            ichida
            <i>&lt;sourse&gt;</i>
            tagi va uning <b><i>src=""</i></b> attributi ishlatiladi. <i>&lt;audio&gt;</i> tagining
            <b><i>controls</i></b>
            attributi bolishi shart
        </li>
        <img src="/html/img/audio.png" alt="element"> <br><br>

        <li><b class="topic">&lt;video&gt; web-sahifaga video yuklash</b> - video yuklashda <i>&lt;video&gt;</i> tagi ichida
            <i>&lt;sourse&gt;</i>
            tagi va uning <b><i>src=""</i></b> attributi ishlatiladi. <i>&lt;video&gt;</i> tagining
            <b><i>controls</i></b>
            attributi bolishi shart
        </li>
        <img src="/html/img/video.png" alt="element"> <br><br>

        <li><b class="topic">Youtube</b> - youtube.com dan video yuklash da <b><i>&lt;iframe&gt;...&lt;iframe&gt;</i></b> tagi orqali
            yuklanadi. Bu tag va liknlari youtube.com da tayyor boladi, shuni olib qoysak tamom
        </li>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Best practices</b> - chiroyli, ihcham va tushinarli code yozish.
            <ol>
                <li><b>Kode yozish boyicha qoidalar</b>
                    <ul>
                        <li>Barcha tag larni <b>kichik</b> xarf bilan yozish</li>
                        <li><b>Indentation</b>dan tog'ri foydalanish (4 ta probel tashlab yozish)</li>
                    </ul>
                </li>
                <li><b>Inline style</b> ishlatman</li>
                <li>Rasm uchun <b>alt</b> attributini korsating</li>
                <li>Har bir sahifada bittadan kop bolmagan <b>&lt;h1&gt;</b> elementini ishlating</li>
                <li><b>&lt;title&gt;</b> va <b>&lt;meta&gt;</b> elementlaridan tog'ri foydalaning</li>
                <li>HTML <b>validator</b>laridan foydalaning <a href="https://validator.w3.org/"><b>validator.w3.org</b></a>,
                    bu saytda yozgan code mizni tekshirsak boladi
                </li>
            </ol>
        </li>
    </ul>
</div>

</body>
</html> <?php ?>

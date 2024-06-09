<?php

$title = "Content";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/bootstrap/index.php">Bootstap</a></b></li>
        <li><b><a href="/bootstrap/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/content/typography/#global-settings">Typography (tipografiya)</a></b> - harflar va
            matnlari o'quvchiga tushinarli va aniq yetkazib berish san'ati, U font turlari va boshqa xossalarni o'z ichiga oladi.
            Yani o'quvchi uchun qulay korinishga olib kelish.</li><br>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Bootstrap xar bir <b>qirilma</b> va <b>operatsion tizim</b> uchun maxsus <b>font-family</b>
            ishlatib, matnlarni <b>qulay korinishda</b> chiqishini taminlaydi.</h3>
        <ol>
            <li><b class="heading">Headings (Sarlavhalar)</b> - bootstrap <b>heading</b>lar uchun o'z stilini qo'llaydi.</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/content/headings-code.png" alt="headings-code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/headings.png" alt="headings"></span><br><br><br>

            <h3><span class="red">Klass</span>dan foydalanib sarlavha yaratish</h3>
            <span style="display: inline-block"><img src="/bootstrap/img/content/p-h-class__code.png" alt="p-h-class__code"> </span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/p-h-class.png" alt="p-h-class"> </span><br><br><br>

            <li><b class="heading">Display headings</b> - ajralib turiladigan sarlavhalar yaratish uchun bootstrapning maxsus klasslari.</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/content/display-heading__h1-code.png" alt="display-heading__h1-code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/display-heading__h1.png" alt="display-heading__h1"> </span><br><br><br>

            <span style="display: inline-block"><img src="/bootstrap/img/content/display-heading__p-code.png" alt="display-heading__p-code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/display-heading__p.png" alt="display-heading__p"> </span><br><br><br>

            <li><b class="heading">Paragraphs (xatboshilar)</b> - bootstrap <b>paragraph</b>lar uchun o'z stilini qo'llaydi.
                <b>Paragraph</b>ni boshqa <b>paragraph</b>dan ajralib turishi uchun bootstrapning <b>lead</b> klassidan foydalaniladi</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/content/paragraph-code.png" alt="paragraph-code"> </span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/paragraph.png" alt="paragraph"></span><br><br><br>

            <li><b class="heading">Lists (ro'yhatlar)</b> - bootstrap <b>lists</b>lar uchun o'z stilini qo'llaydi.</li>

            <h3>Unstyled</h3>
            <span style="display: inline-block"><img src="/bootstrap/img/content/list(1).png" alt="list(1)"> </span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/list(2).png" alt="list(2)"> </span><br><br>
            <span style="display: inline-block"><img src="/bootstrap/img/content/list(3).png" alt="list(3)"> </span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/list(4).png" alt="list(4)"> </span><br><br>

            <h3>Inline</h3>
            <span style="display: inline-block"><img src="/bootstrap/img/content/inline-list__code.png" alt="inline-list__code"> </span>
            <span style="display: inline-block"><img src="/bootstrap/img/content/inline-list.png" alt="inline-list"> </span><br><br><br>
        </ol>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/content/images/#responsive-images">Images</a></b> - <b>image</b>larni <b>responsve</b>
            qilish uchun, bootstrapning maxsus stillari mavjud.</li><br>

        <ol>
            <li><b class="heading">responsive images</b> - bootstrapning <b>.img-fluid</b> klassi <b>image</b>larni <b class="red">responsive</b> qilish uchun ishlatiladi.
                Responsive qilingan <b>image</b>lar ota-ona (parent) elementidan katta bolib ketmaydi va ota-ona (parent) elementiga qarab responsive boladi.</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/images/responsive-code.png" alt="responsive-image__code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/images/responsive.png" alt="responsive-image"></span><br><br><br>

            <li><b class="heading">thumbnails images</b> - bootstrapning <b>.img-thumbnail</b> klassi <b>image</b>larni borderini ajratish uchun ishlatiladi.</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/images/thumbnail-code.png" alt="thumbnail-image__code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/images/thumbnail.png" alt="thumbnail-image"></span><br><br><br>

            <li><b class="heading">rounded images</b> - bootstrapning <b>.rounded</b> klassi <b>image</b> qirralarini <b>qiya</b> korinishga olibkelish uchun ishlatiladi.</li><br>
            <span style="display: inline-block"><img src="/bootstrap/img/images/rounded-code.png" alt="rounded-image__code"></span>
            <span style="display: inline-block"><img src="/bootstrap/img/images/rounded.png" alt="rounded-image"></span><br><br><br>
        </ol>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/content/figures/">Figures</a></b> - bootstrap figure yordamida rasm va matnni birga ekranga chiqaradi.</li><br>
        <span style="display: inline-block"><img src="/bootstrap/img/images/figure-code.png" alt="figure-code"></span>
        <span style="display: inline-block"><img src="/bootstrap/img/images/figure.png" alt="figure"></span><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/content/tables/#overview">Tables (jadvallar)</a></b> - bootstrap jadvallar yaratish (zebrali, success, hover).</li><br>
        <img src="/bootstrap/img/content/table-code.png" alt="table-code"><br><br>
        <img src="/bootstrap/img/content/table.png" alt="table"><br><br><br>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>


<?php

$title = "Layouts (Maketlar)";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/bootstrap/index.php">Bootstap</a></b></li>
        <li><b><a href="/bootstrap/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <li><b class="topic"> <a href="https://getbootstrap.com/docs/5.0/layout/breakpoints/">Breakpoints</a></b> - qurilmaning kengligigga qarab web sahifa o'z kontenti o'zgartiruvchi nuqtalar bo'lib. Bu nuqtalarda,
            web sahifa odatda boshqa ko'rinishga o'tib, qurilmaga moslashadi. Bootstrap o'zining breakpoint qiymatlariga ega va <b>mobile-first yondashuvi asosida qurilgan.</b></li><br>
        <img src="/bootstrap/img/breakpoints/breakpoints(1).png" alt="breakpoints(1)"> <br><br>
        <img src="/bootstrap/img/breakpoints/breakpoints(2).png" alt="breakpoints(2)"> <br><br><br>
        <img src="/bootstrap/img/breakpoints/max-width-breakpoint.png" alt="max-width-breakpoint"> <br><br><br>

        <h2>Media queries</h2>
        <img src="/bootstrap/img/breakpoints/(mq)-min-width.png" alt="(mq)-min-width"> <br><br>
        <img src="/bootstrap/img/breakpoints/(mq)-max-width.png" alt="(mq)-max-width"> <br><br><br>

        <li><b class="topic"> <a href="https://getbootstrap.com/docs/5.0/layout/containers/">Container</a></b> - bootstrapning asosiy qismlaridan bo'lib, elementlarni o'zida
            saqlash, surish va markazga joylashtirish uchun ishlatiladi. Bootstrapning Grid tizimini ishlayish uchun <b>container</b> ishlatish majburish hisoblanadi.</li><br>

        <h2>Containerning uch turi mavjud:</h2>
        <ol>
            <li><b class="heading"><a href="https://getbootstrap.com/docs/5.3/layout/containers/#default-container">container</a></b> - har bir breakpoint uchun
                <b>max-width</b> xossaisga qiymatini belgilab beradi.</li>
            <img src="/bootstrap/img/container/container.png" alt="container"> <br><br>

            <li><b class="heading"><a href="https://getbootstrap.com/docs/5.3/layout/containers/#fluid-containers">container-fluid</a></b> - hamma breakpoint uchun
                <b>width</b> xossaisga <b>100%</b> qiymatini belgilab beradi.</li>
            <img src="/bootstrap/img/container/container-fluid.png" alt="container-fluid"> <br><br>

            <li><b class="heading"><a href="https://getbootstrap.com/docs/5.3/layout/containers/#responsive-containers">container-{breakpoint}</a></b> - ko'rsatilgan <b>breakpoint</b>gacha <b>width</b> xossaisga <b>100%</b> qiymatini belgilab beradi.</li>
            <img src="/bootstrap/img/container/container-{}.png" alt="container-{}"> <br><br>
        </ol>

        <li><b class="topic"> <a href="https://getbootstrap.com/docs/4.0/layout/grid/">Grid tizimi (syrtem)</a></b> - mobile-first yondashuviga asoslangan,
            <b>12</b> ustun yordamida har xil ko'rinishdagi<b>layout</b>lar yaratish imkoniyatini beruvchi tizim. Grid bir necha CSS klasslar to'plamidan iboratdir.
            Grid <b>container</b>, <b>row (qator)</b> va <b>column (ustun)</b>lardan iborat tizim hisoblanadi.</li>

        <h2>Grid system qoidalari:</h2>
        <li><b>Rows (qatorlar) har doim <b>container</b> ichida joylashgan bo'lishi kerak.</b></li>
        <li>Go'rizontal <b>ustunlar guruhini</b> yaratish uchun <b>rows (qatorlar)</b>dan foydalaning.</li>
        <li><b>Kontent</b> har doim <b>column (ustunlar)</b> ichida joylashadi.</li><br>

        <h2><span class="red">Bir xil kenglik</span>ga ega bo'lgan ustunlar yaratish.</h2>
        <img src="/bootstrap/img/grid/same-width.png" alt="same-width"> <br><br>

        <h2><span class="red">Turli xil kenglik</span>ga ega bo'lgan ustunlar yaratish.</h2>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Ustunga ma'lum bir kenglik ko'rsatish uchun <b>.col-*</b>
            klassidan foydalanib, yulduzcha (*) o'rniga 1 dan 12 gacha bo'lgan qiymat berish mumkun. Masalan: <b>.col-6</b></h3>
        <img src="/bootstrap/img/grid/different-width.png" alt="different-width"> <br><br>
        <img src="/bootstrap/img/container/col(1).png" alt="col(1)"> <br><br>
        <img src="/bootstrap/img/container/col(2).png" alt="col(2)"> <br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/grid/#responsive-classes">Responsive grid tizimi (system)</a></b> - yordamida
            turli xil o'lchovga ega bo'lgan qurilmalar uchun <b>responsive (moslashuvchan)</b>layout yaratish imkoniyati mavjud.
            Uning uchun <b>Bootstrap breakboint</b>larning <b>class infix</b>dan foydalaniladi.</li><br>
        <img src="/bootstrap/img/grid/breakpoints-class-infix.gif" alt="class-infix"> <br><br><br>

        <h2>Barcha breakpointlarda <span class="red">bir xil</span> ko'rinishga ega grid.</h2>
        <img src="/bootstrap/img/grid/all-breakpoints.png" alt="all-breakpoint"> <br><br>

        <h2>Kichik ekranlarda <span class="red">gorizontal ko'rinish</span>ga ega grid.</h2>
        <img src="/bootstrap/img/grid/col-sm.png" alt="col-sm"> <br><br>
        <img src="/bootstrap/img/grid/col-md.png" alt="col-md"> <br><br>

        <h2>Aralash <span class="red">class infix</span>lardan tashkil topgan grid.</h2>
        <img src="/bootstrap/img/grid/mixed-col.png" alt="mixed-col"> <br><br><br>

        <li><b class="topic">Nested grid</b> - grid tizimi <b>qatorlarni nested (ichma-ich)</b> joylashtirish imkoniyatini beradi.
            Uning uchun <b>column (ustun)</b> ichida <b>row (qator)</b> ochish kifoya bo'ladi.</li><br>
        <img src="/bootstrap/img/grid/nested-grid.png" alt="nested-grid"> <br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/columns/#how-they-work">Columns (Ustunlar)</a></b> - bootsrtap grid tizimining
            asoslaridan biri bo'lib, <b>row (qatorni)</b>ni bir necha bolaklarga bolib, o'z ichida <b>content</b> saqlash uchun ishlatiladi.</li><br>
        <img src="/bootstrap/img/grid/columuns.png" alt="columuns"> <br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/columns/#alignment">Alignment</a></b> - flexbox klasslari yordamida
            ustunlarni <b>vertikal</b> va <b>gorizontal</b> joylashuvini o'zgartirish uchun ishlatiladi.</li><br>

        <h3>Vertical joylashuvi:</h3>
        <span style="display: inline-block"><img src="/bootstrap/img/grid/alignment-vertical__css.png" alt="alignment-vertical__css"></span>
        <span style="display: inline-block"><img src="/bootstrap/img/grid/alignment-vertical__html.png" alt="alignment-vertical__html"></span><br><br>
        <img src="/bootstrap/img/grid/alignment-vertical.png" alt="alignment-vertical"> <br><br><br>

        <h3>Gorizontal joylashuvi:</h3>
        <span style="display: inline-block"><img src="/bootstrap/img/grid/alignment-horizontal__css.png" alt="alignment-horizontal__css"></span>
        <span style="display: inline-block"><img src="/bootstrap/img/grid/alignment-horizontal__html.png" alt="alignment-horizontal__html"></span><br><br>
        <img src="/bootstrap/img/grid/alignment-horizontal.png" alt="alignment-horizontal"> <br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/columns/#column-wrapping">Column wrapping</a></b> - agar 1 qatorda
            <b>12ta</b> dan <b>ko'p</b> ustun bo'lsa, ortiqcha ustunlar guruhi <b>keyingi qatordan</b> joylashadi.</li><br>
        <img src="/bootstrap/img/grid/column-wrapping__code.png" alt="column-wrapping"> <br><br>
        <img src="/bootstrap/img/grid/column-wrapping.png" alt="column-wrapping__code"> <br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/columns/#reordering">Reordering (Qayta tartiblash)</a></b> - <b>flexbox klass</b>lar yordamida
            ustunlar tartibini o'zgartirish: <b>.order-*</b> klassidan foydalanib (<b>*</b> o'rniga 0dan 5gacha korsatiladi) ustunlarni ketma-ketligini
            o'zgartirish mumkun. Order klasslariga <b>breakpoint</b>larning <b>infix</b>larini qo'shish imkoniyati mavjud (<b>.order-{breakpoint}</b>).</li><br>
        <img src="/bootstrap/img/grid/reordering-code.png" alt="reordering-code"> <br><br>
        <img src="/bootstrap/img/grid/reordering.png" alt="reordering-code"> <br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/layout/columns/#">Offsetting columns (O'chirish ustunlari)</a></b> - ustunlarni
            <b>o'ng tarafka surish</b>. Bootstrap klasslari orqali amalga oshiriladi <b>.offset-{breakpoint}-*</b> (<b>*</b> o'rniga 0dan 12gacha korsatiladi).</li><br>
        <img src="/bootstrap/img/grid/offsetting-columns__code.png" alt="offsetting-columns"> <br><br>
        <img src="/bootstrap/img/grid/offsetting-columns.png" alt="offsetting-columns"> <br><br><br>

        <li><b class="topic"><a href="">Gutters</a></b> - ustunlar orasidagi masofani belgilash.</li><br>
        <h2>Gutters qoidalari:</h2>
        <li>Gutters <b>gorizontal padding</b> yordamida ustunlar orasida hosil qilinadigan masofa.</li>
        <li>Gutters <b>default</b> holatda <b>1.5rem 24 pixel masofaga ega boladi.</b></li>
        <li>Gutters <b>responsive (moslashuvchan)</b> bolib, <b>bir breakpoint</b>dan <b>ikkinchi breakpoint</b>ga o'tganda <b>o'zgaradi</b>.</li><br>

        <h2><span class="red">Gorizontal gutter</span> yaratish - bootstrapning <span class="red">.gx-*</span> klassi orqali yaratiladi,
            <span class="red">*</span> o'rniga 0dan 5gacha korsatiladi. Qiymat qancha katta bo'lsa masofa ham kattalashib boradi.</h2>
        <img src="/bootstrap/img/gutters/gx-code.png" alt="horizontal-gutter__code"> <br><br>
        <img src="/bootstrap/img/gutters/gx.png" alt="horizontal-gutter"> <br><br><br>

        <h2><span class="red">Vertical gutter</span> yaratish - bootstrapning <span class="red">.gy-*</span> klassi orqali yaratiladi,
            <span class="red">*</span> o'rniga 0dan 5gacha korsatiladi. Qiymat qancha katta bo'lsa masofa ham kattalashib boradi.</h2>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/gy-css.png" alt="vertical-gutter__code"></span>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/gy-html.png" alt="vertical-gutter__code"></span><br><br>
        <img src="/bootstrap/img/gutters/gy.png" alt="vertical-gutter"> <br><br><br>

        <h2><span class="red">Gorizontal gutter</span> va <span class="red">Vertical gutter</span> yaratish - bootstrapning
            <span class="red">.g-*</span> klassi orqali yaratiladi,<span class="red">*</span> o'rniga 0dan 5gacha korsatiladi.
            Qiymat qancha katta bo'lsa masofa ham kattalashib boradi.</h2>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-css.png" alt="horizontal&vertical-gutter__css"> </span>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-html.png" alt="horizontal&vertical-gutter__html"> </span><br><br>
        <img src="/bootstrap/img/gutters/g.png" alt="horizontal&vertical-gutter"> <br><br><br>

        <h2><span class="red">Responsive gutter</span> yaratish - bootstrapning <span class="red">.gx-{breakpoint}-*</span>, <span class="red">.gy-{breakpoint}-*</span>
            va <span class="red">.g-{breakpoint}-*</span> klassi orqali yaratiladi,<span class="red">*</span> o'rniga 0dan 5gacha korsatiladi, <b>breakpoint</b> o'rniga
            <b>sm, md, lg, xl</b> va <b>xxl</b> qiymatlari korsatiladi. Qiymat qancha katta bo'lsa masofa ham kattalashib boradi.</h2>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-css.png" alt="responsive-gutter__css"> </span>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-html.png" alt="responsive-gutter__html"> </span><br><br>
        <img src="/bootstrap/img/gutters/g-lg(1).png" alt="responsive-gutter(1)"> <br><br>
        <img src="/bootstrap/img/gutters/g-lg(2).png" alt="responsive-gutter(2)"> <br><br><br>

        <h2><span class="red">Gutter</span>ni olib tashlash - bootstrapning
            <span class="red">.g-0</span> klassi orqali bajariladi.</h2>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-0__css.png" alt="gutter-0__css"> </span>
        <span style="display: inline-block"><img src="/bootstrap/img/gutters/g-0__html.png" alt="gutter-0__html"> </span><br><br>
        <img src="/bootstrap/img/gutters/g-0.png" alt="gutter-0"> <br><br><br>

        <h2>Homework</h2>
        <img src="/bootstrap/img/gutters/homework(1).png" alt="homework(1)"> <br><br><br>
        <img src="/bootstrap/img/gutters/homework(2).png" alt="homework(2)"> <br><br><br>
        <img src="/bootstrap/img/gutters/homework-code.png" alt="homework-code"> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>
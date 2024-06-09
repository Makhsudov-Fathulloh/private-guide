<?php

$title = "Forms";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/bootstrap/index.php">Bootstap</a></b></li>
        <li><b><a href="/bootstrap/project/index.html">Project</a></b></li>
    </ul>

    <ul>
        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/overview/#overview">Forms</a></b> - Bootstrap classlari orqali formalarga style berish mumkun.</li><br>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <b>&lt;input&gt;</b> va <b>&lt;textarea&gt;</b> uchun style berishda
            <b><i>.form-control</i></b> klassidan foydalaniladi.</b></h3>
        <img src="/bootstrap/img/forms/form-code.png" alt="form-code"><br><br>
        <img src="/bootstrap/img/forms/form.png" alt="form"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/select/">Select</a></b> - Bootstrapning <b>.form-select</b> classi orqali
            <b>&lt;select&gt; tag</b>ga style berish mumkun.</li><br>
        <span style="display: inline-block"><img src="/bootstrap/img/forms/form-select__code.png" alt="form-select__code"></span>
        <span style="display: inline-block"><img src="/bootstrap/img/forms/form-select.png" alt="form-select"></span><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/checks-radios/">Checkbox</a></b> - Bootstrapda xamma <b>brauzer</b>larda bir xil korinadigan
            <b>chechbox</b> yaratish mumkun.</li><br>
        <img src="/bootstrap/img/forms/form-checkbox__code.png" alt="form-checkbox__code"><br><br>
        <img src="/bootstrap/img/forms/form-checkbox.png" alt="form-checkbox"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/checks-radios/">Radio</a></b> - Bootstrapda xamma <b>brauzer</b>larda bir xil korinadigan
            <b>radio</b> yaratish mumkun.</li><br>
        <img src="/bootstrap/img/forms/form-radio__code.png" alt="form-radio__code"><br><br>
        <img src="/bootstrap/img/forms/form-radio.png" alt="form-radio"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/range/">Range</a></b> - Bootstrapning <b>.form-range</b> classi orqali
            <b>range (oraliq)</b> korinishidagi <b>input</b>larga style berish mumkun.</li><br>
        <img src="/bootstrap/img/forms/form-range__code.png" alt="form-range__code"><br><br>
        <img src="/bootstrap/img/forms/form-range.png" alt="form-range"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/input-group/">Input group</a></b> - <b>.form-control</b>ning yon tomonlariga <b>text</b>,
            <b>tigma</b> va <b>tugmalar guruxini</b> qoshish mumkun.</li><br>
        <img src="/bootstrap/img/forms/input-group__code.png" alt="input-group__code"><br><br>
        <img src="/bootstrap/img/forms/input-group.png" alt="input-group"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/floating-labels/">Floating labels</a></b> - Bootstrapning <b>.form-floating</b> classi orqali
            <b>input</b> maydonlarida <b>floating lable</b> (suzib yuradigan yorliq), yaratish mumkun.</li><br>
        <img src="/bootstrap/img/forms/floating-labels__code.png" alt="floating-labels__code"><br><br>
        <img src="/bootstrap/img/forms/floating-labels.png" alt="floating-labels"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/layout/">Form layout</a></b> - Bootstrap yordamida <b>form elemenlar</b> uchun turli
            murakkablikdagi <b>layout (horizontal, vertical, inline)</b>larni yaratish mumkun.</li><br>
        <img src="/bootstrap/img/forms/layout-code-1.png" alt="layout-code-1"><br><br>
        <img src="/bootstrap/img/forms/layout-code-2.png" alt="layout-code-2"><br><br>
        <img src="/bootstrap/img/forms/layout.png" alt="form-layout"><br><br><br>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/validation/">Validation</a></b> - foydalanuvchi tomonidan forma toldirilayotkanda,
            to'gri yoki notog'ri qiymat kiritganligini xabar berish.</li><br>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> Validation qullab quvvatlaydigan elementlar.</h3>
        <ol>
            <li><b>.form-control</b> - klassiga ega bolgan <b>&lt;input&gt;</b> va <b>&lt;textarea&gt;</b> elementlar.</li>
            <li><b>.form-select</b> - klassiga ega bolgan <b>&lt;select&gt;</b>.</li>
            <li><b>.form-check</b> - klassiga ega bolgan elementlar.</li>
        </ol>

        <h3><i class="fa fa-lightbulb-o" style="font-size:30px;color:red"></i> <span class="red">.was-validated</span> klassiga validation, web sahifa yuklanishi bilan ishka tushishadigan formaga aylanadi. </h3>

        <li><b class="topic"><a href="https://getbootstrap.com/docs/5.3/forms/validation/#custom-styles">Validation turlari</a></b> - <b>.valid-feedback</b>text korinishidagi va <b>.valid-tooltip</b> borderli buttonga oxshash.</li><br>
        <hr>
        <img src="/bootstrap/img/forms/validation-feedback.png" alt="validation-feedback"><br><br>
        <hr>
        <img src="/bootstrap/img/forms/validation-tooltip.png" alt="validation-tooltip"><br><br><br>
    </ul>

</div>

<?php
include "../../root/footer.php";
?>


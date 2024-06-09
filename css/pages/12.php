<?php

$title = "Best practices";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/index.php">CSS</a></b></li>
        <li><b><a href="/css/project/index.html">Project</a></b></li>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Best practices</b> - amaliyotda qo'llash uchun va ko'dimiz yaxshiroq sifatga ega bo'lishi uchun beriladigan tavsiyalar.</li><br>
        <ol>
            <li><b class="heading">CSS ko'd o'qishka oson bo'lishi kerak.</b></li>
            <li><b class="heading">CSS faylida birinchi umumiy selectorlar bo'lishi kerak.</b></li>
            <li><b class="heading">Birinchi HTML yaratib oling.</b></li>
            <li><b class="heading"><span class="red">Multible class</span>lardan foydalaning.</b></li>
            <li><b class="heading">Qisrqatmalardan (shorthand) foydalaning.</b></li>
            <li><b class="heading">CSS ko'dga <span class="red">commit</span> yozib boring.</b></li>
            <li><b class="heading">Inline stillardan foydalanmang.</b></li>
            <li><b class="heading">Nisbiy (relative) o'lchov birliklaridan foydalaning.</b></li>
            <li><b class="heading">Kodni <a href="https://jigsaw.w3.org/css-validator/">CSS validatorlar</a> yordamida tekshiring.</b></li>
            <li><b class="heading">Stillarni foyllarga bo'lib yuboring.</b></li>
            <li><b class="heading">Layout yaratishda <span class="red">Flexbox</span> yoki <span class="red">Grid</span> dan foydalaning.</b></li>
            <li><b class="heading"><span class="red">!important</span> ishlatmaslikka harakat qiling.</b></li>
            <li><b class="heading"><span class="red">Class</span> yoki <span class="red">ID</span> nomlayotkanda <i>kebab-case</i> formatidan foydalaning.</b></li>
            <li><b class="heading">CSS metodologiyasidan foydalaning, masalan <a href="https://getbem.com/introduction/">BEM</a>.</b></li>
        </ol>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>

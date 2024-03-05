<?php

declare(strict_types= 0 );
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
    <link rel="stylesheet" href="/css/css/style.css">

    <title>CSS</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/project.html">Project</a></b></li>
    </ul>

    <ul>
        <li><b class="topic">CSS (Cascading Style Sheets)</b> - qasqadlangan stillar jadvali</li>
        <img src="/css/img/version.png" alt="css version"> <br><br>

        <li><b class="topic">Attach CSS styles to HTML files</b> - HTML fayllariga CSS stillarini ulash</li>
        <br>
        <ol>
            <li><b>Inline styles</b> - Satirli syillar</li>
            <img src="/css/img/inline-styles.png" alt="inline-style"> <br><br>
            <li><b>Internal styles</b> - Ichki syillar</li>
            <img src="/css/img/internal-styles.png" alt="internal-style"> <br><br>
            <li><b>External styles</b> - Tashqi syillar</li>
            <br>
            index.html <br>
            <img src="/css/img/external-style-1.png" alt="external-style"> <br><br>
            style.css <br>
            <img src="/css/img/external-style-2.png" alt="external-style"> <br><br>
        </ol>

    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">CSS Syntaxs</b> - CSS sintaqsisi</li>
        <img src="/css/img/css-syntax.png" alt="css-syntax"> <br><br>

        <li><b class="topic">Selectors</b> - elementni tanlab oluvchilar</li>
        <br>
        <ol>
            <li><b><i>Tag (tag name)</i></b></li>
            <img src="/css/img/selectors/tag.png" alt="yag"> <br><br>
            <li><b><i>Class (.) istalgancha ishlatish va nomlash mumkun</i></b></li>
            <img src="/css/img/selectors/class.png" alt="class"> <br><br>
            <li><b><i>ID (#) unique bir marotaba nomlash mumkun holos</i></b></li>
            <img src="/css/img/selectors/id.png" alt="id"> <br><br>
            <li><b><i>Attribute ([])</i></b></li>
            <img src="/css/img/selectors/attribute.png" alt="attribute"> <br><br>
            <li><b><i>Universal (*)</i></b></li>
            <img src="/css/img/selectors/universal.png" alt="universal"> <br><br>
        </ol>
    </ul>
</div>

<div>
    <ul>
        <li><b class="topic">Comments (/* */)</b> - kommit yozish</li>
        <br>

        <li><b class="topic">Specifisity</b> - o'zoga hoslik</li>
        <ol>
            <li><b><i>Cascading (Kaskadlash)</i></b> - bir HTML elementiga bir necha CSS qoidalar ko'rsatilishi va
                ulardan
                birining elementiga amal qilishi
            </li>
            <li><b><i>Specifisity (O'ziga xoslik)</i> - qoidalar turli ustuvorlikka (priorited) ega boladi</b></li>
            <h3>Important (@) -> Inline style -> ID (#) -> Class (.) -> Attribute ([]) -> Tag (tag name)</h3>
            <i>Importent - eng katta ustuvorlik berish!</i> <br><br>
        </ol>

        <li><b class="topic">Inheritanse (Meros olish)</b> - element o'z syillariga ega bolmasa, ota-onasidan(parent)
            meros
            qilib oladi
        </li>
        <li><b><a href="https://stackoverflow.com/questions/5612302/which-css-properties-are-inherited  ">Meros bo'lib
                    o'tadigan
                    CSS xossalari ro'yhati</a></b></li>
        <br>

        <li><b class="topic">HTML Tree</b> - HTML shajarasi</li>
        <br>
        <!--        <img src="/css/img/html-tree/family-tree.png" alt="family-tree"> <br><br>-->
        <img src="/css/img/html-tree/html-code.png" alt="html-code"> <br><br>
        <img src="/css/img/html-tree/html-tree.png" alt="html-tree"> <br><br>

        <li><b class="topic">Combinators (kombinatorlar)</b> - 'selector'lar orasida munosabatni (bog'liqlik) ko'rsatib
            beradigan maxsus simvollar
        </li>
        <br>
        <ol>
            <li><b><i>Descendant selector (Avlod selector)</i></b> - belgilangan elementning avlodlari bo'lgan barcha
                elementlarni tanlab oladi
            </li>
            <img src="/css/img/combinators/descendant-element.png" alt="descendant-element"> <br><br>

            <li><b><i>Child selector (Farzand selector)</i></b> - belgilangan elementning farzandlari bo'lgan barcha
                elementlarni tanlab oladi
            </li>
            <img src="/css/img/combinators/child-selector.png" alt="child-selector"> <br><br>

            <li><b><i>Adjacent sibling selector (Qo'shni qardosh selector)</i></b> - bir elementga yon va qoshni bo'lgan
                boshqa
                elementni tanlash uchn ishlatiladi. Faqat biribhi elementni oladi holos
            </li>
            <img src="/css/img/combinators/adjacent-sibling -selector.png" alt="child-selector"> <br><br>

            <li><b><i>General sibling selector (Farzand selector)</i></b> - bir elementka qo'shni bo'lgan barcha
                elementlarni
                tanlab uchun ishlatiladi. Faqat tanlangan elementdan keyinilarini oladi
            </li>
            <img src="/css/img/combinators/general-sibling-selector.png" alt="child-selector"> <br>
        </ol>
        <br><br>

        <li><b class="topic">Multiple classes</b> - elementga bir nechta 'class'lar ko'rsatish imkoniyati</li>
        <img src="/css/img/multiple-classes.png" alt="multiple-classes"> <br><br>

        <li><b class="topic">Combined selectors</b> - bir elementni bir nechta selectorlar kombinatsiyasi orqali tanlab
            olish
        </li>
        <img src="/css/img/combined-selectors.png" alt="multiple-classes"> <br><br>

        <li><b class="topic">BEM strcture (__) class__items</b> - BEM metodologiyasi boyicha 'class'larna nom berish va (__) bilan ajratib yozishni ishlatamiz</li> <br>



    </ul>
</div>

</body>
</html>


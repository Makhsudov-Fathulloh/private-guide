<?php

declare(strict_types = 0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

$number = "5";
$sum = $number + 2;
//echo gettype($sum);

$eshmat = 1000;
$toshmat = 1200;
$hikmat = 1500;
?>

<!--<html>-->
<!--<head>-->
<!--    <style>-->
<!--        table,td {-->
<!--            border: 1px solid black;-->
<!--            border-collapse: collapse;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<table>-->
<!--    <tr><td>--><?php //= "Eshmat = $$eshmat";?><!-- </td></tr>-->
<!--    <tr><td>--><?php //= "Toshmat = $$toshmat";?><!-- </td></tr>-->
<!--    <tr><td>--><?php //= "Hikmat = $$hikmat";?><!-- </td></tr>-->
<!--</table>-->
<!--</body>-->
<!--</html>-->

<?php

//$a = 99;
//$b = 9;
//$c = 8;
//
//echo $a++;
//echo $b++;
//echo --$c;
//echo $c = $a++ / $b++ - --$c;

//echo ceil(-1.00000000000001);
//echo floor(1.99999999999999993);
echo round(0.4999999999999999);
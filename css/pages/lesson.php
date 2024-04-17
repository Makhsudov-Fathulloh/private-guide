<?php

declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">

<head>
    <title>CSS Grid</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 20px;
            background-color: #025955;
            border-radius: 10px;
        }
        .grid-item {
            padding: 20px;
            background-color: #fde8cd;
            font-weight: bold;
            margin: 10px;
            border-radius: 10px;
        }
        .item-1 {
            grid-row: 1 / 3; /* grid-column: 1 / span 2; */
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <div class="grid-item item-1">Grid item 1</div>
        <div class="grid-item">Grid item 2</div>
        <div class="grid-item">Grid item 3</div>
        <div class="grid-item">Grid item 4</div>
        <div class="grid-item">Grid item 5</div>
        <div class="grid-item">Grid item 6</div>
    </div>
</body>

</html>



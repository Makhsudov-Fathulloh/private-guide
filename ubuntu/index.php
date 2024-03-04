<?php

declare(strict_types = 0);
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
    <title>Document</title>
</head>
<body>

<li><b><a href="/index.php">Home</a></b></li>

<ul>
    <li> <b>/var/www/...</b> <br> </li>

    <li> <b>/etc/nginx/sites/available/...</b> <br> </li>

    <li> <b>sudo ln -s /etc/nginx/sites-available/... /etc/nginx/sites-enabled/</b> <br> </li>

    <li>  <b>sudo vim /etc/hosts</b> <br> </li>

    <li>  <b>service nginx restart</b> <br> </li>

    <li> <b>sudo nginx -t</b> <br> </li>

    <li>  <b>sudo tail -f /var/log/nginx/error.log</b> <br> </li>
</ul>
</body>
</html>


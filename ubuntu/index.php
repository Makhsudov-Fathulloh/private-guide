<?php

$title = "Ubuntu";
include '../root/header.php';
?>

<li><b><a href="/index.php">Home</a></b></li><br>

<ul>
    <li> <b>/var/www/...</b> </li> <br>

    <li> <b>/etc/nginx/sites/available/...</b> </li> <br>

    <li> <b>sudo ln -s /etc/nginx/sites-available/... /etc/nginx/sites-enabled/</b> </li> <br>

    <li>  <b>sudo vim /etc/hosts</b> </li> <br>

    <li>  <b>service nginx restart</b> </li> <br>

    <li> <b>sudo nginx -t</b> </li> <br>

    <li>  <b>sudo tail -f /var/log/nginx/error.log</b> </li> <br>

    <li>  <b>sudo ps ax | grep ide</b> </li> <br>

    <li>  <b>sudo kill -p ....</b> </li> <br>

</ul>

<?php
include "../root/footer.php";
?>


<?php

declare(strict_types=0);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/css/style.css">
    <link rel="stylesheet" href="/php/css/main.css">

    <title>Introduction to SQL</title>
</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <h2 class="topic">MySQL commands:</h2>
        <li><b class="heading">CREATE DATABASE IF NOT EXISTS tablename;</b> - tablename nomli database bolmasa,
            tablename nomli database yarat.
        </li>
        <li><b class="heading">CREATE DATABASE tablename;</b> - tablename nomli database yaratish.</li>
        <li><b class="heading">USE tablename;</b> - tablename nomli database tanlash.</li>
        <li><b class="heading">DROP DATABASE IF EXISTS tablename;</b> - tablename nomli database bolmasa, tablename
            nomli database ochirish.
        </li>
        <li><b class="heading">DROP DATABASE tablename;</b> - tablename nomli database ochirish.</li>
        <br>

        <li><b class="heading">SHOW DATABASES;</b> - database list.</li>
        <li><b class="heading">SHOW INDEX FROM tablename;</b> - jadvaldagi barcha index keylar ro'yxatini oladi.</li>
        <li><b class="heading">DROP INDEX kayname ON tablename;</b> - jadvaldagi index keyni o'chirish.</li>
        <br>

        <li><b class="heading">TRUNCATE TABLE;</b> - butun jadvallarni o'chiradi.</li>
        <li><b class="heading">TRUNCATE TABLE tablename;</b> - jadvaldagi barcha malumotlarni o'chiradi. PRIMARY_KEY ni
            yangilaydi va 1 dan boshlanadi.
        </li>
        <br>


        <h2 class="topic"><a href="https://www.youtube.com/watch?v=Cmdrb420NNw">Install</a> <a
                    href="https://ubuntu.com/server/docs/install-and-configure-a-mysql-server">MySQL</a> on Ubuntu 22.04
        </h2>
        <li><b class="heading">sudo apt install mysql-server</b></li>
        <li><b class="heading">sudo service mysql start</b></li>

        <li><b class="heading">sudo mysql_secure_installation</b> - root parol qo'yish.</li>
        <li><b class="heading">mysql -u root -p</b> - root orqali kirish (-u -> user, -p - password).</li>
        <li><b class="heading">CREATE USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY
                'new_password';</b> - root (user) parol qo'yish.
        </li>
        <li><b class="heading">ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY
                'new_password';</b> - root (user) parol yangilash.
        </li>
        <br>

        <li><b class="heading">sudo service mysql status</b></li>
        <li><b class="heading">sudo service mysql restart</b></li>
        <li><b class="heading">sudo service mysql stop</b></li>
        <li><b class="heading">sudo apt-get remove --purge mysql*</b></li>
        <br>

        <li><b class="heading"><a href="https://www.phpmyadmin.net/">Install</a> phpmyadmin on Ubuntu 22.04</b></li>
        <br>
        <div  style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
            server {
                listen 80;
                root /var/www/admin.mysql;
                server_name admin.mysql;
                index index.php index.html;
                client_max_body_size 2000m;

                location / {
                    root /var/www/admin.mysql;
                    try_files $uri /index.php$is_args$args;
                autoindex on;
                }

                location ~ \.php$ {
                    try_files $uri =404;
                    #fastcgi_pass 127.0.0.1:9000;
                    fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                    fastcgi_index index.php;
                    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                    #fastcgi_param SCRIPT_FILENAME /scripts$fastcgi_script_name;
                    include       fastcgi_params;
                }
            }
            </pre><br>
        </div>
        <br>

        <h2 class="topic"><a href="https://www.youtube.com/watch?v=UGfteFq_6Co">Install</a> <a
                    href="https://ubuntu.com/server/docs/install-and-configure-postgresql">PostgreSQL</a> on Ubuntu
            22.04</h2>
        <img src="/sql/img/1/" alt=""> <br><br><br>
    </ul>
</div>

</body>
</html>


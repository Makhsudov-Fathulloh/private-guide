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
        <h2 class="topic">Nginx commands:</h2>

        <li><b class="heading">/etc/nginx/sites-available</b> - conf file yaratish</li>
        <br>
        <div style="background-color: #021017"><br>
            <pre style="color: #ffffff;">
            server  {
                listen 80;
                server_name yii2.loc;
                root /var/www/yii2.loc/frontend/web/;
                index index.php index.html;

                location / {
                    try_files $uri $uri/ /index.php$is_args$args;
                }

                location ~ \.php$ {
                    include snippets/fastcgi-php.conf;
                    fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                }

            }

            server   {
                listen 80;
                server_name a.yii2.loc;
                root        /var/www/yii2.loc/backend/web/;
                index index.php index.html;

                location / {
                try_files $uri $uri/ /index.php$is_args$args;
            }

                location ~ \.php$ {
                    include snippets/fastcgi-php.conf;
                    fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                }
            }

            server {
                listen 80;
                server_name api.yii2.loc;
                root  /var/www/yii2.loc/api/web;
                index index.php index.html;

                location / {
                    try_files $uri $uri/ /index.php$is_args$args;
                }

                location ~ \.php$ {
                    include snippets/fastcgi-php.conf;
                    fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
                }
            }

            server {
                    listen 80;
                    server_name cdn.yii2.loc;
                    root /var/www/yii2.loc/static;
                    index index.php index.html;
            }
            </pre><br>
        </div>
        <br>

        <li><b class="heading">ln -s /etc/nginx/sites-available/conf.name /etc/nginx/sites-enabled</b> - conf file run qilish.</li>
        <li><b class="heading">sudo vim /etc/hosts</b> - local domein yaratish.</li>
        <li><b class="heading">service nginx restart</b> - local domein yaratish.</li>
        <li><b class="heading">service nginx start</b> - local domein yaratish.</li>
        <li><b class="heading">service nginx stop</b> - local domein yaratish.</li>
        <br>

        <li><b class="heading">tail -f</b> - .</li>
        <li><b class="heading">sudo nginx -t </b> - nginx error tekshirish.</li>

        <img src="/sql/img/1/" alt=""> <br><br><br>
    </ul>
</div>

</body>
</html>


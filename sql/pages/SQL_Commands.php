<?php

$title = "SQL commands";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <h2 class="topic">MySQL commands:</h2>
        <li><b class="heading">CREATE DATABASE IF NOT EXISTS databasename;</b> - databasename nomli database bolmasa,
            databasename nomli database yarat.
        </li>
        <li><b class="heading">CREATE DATABASE databasename;</b> - databasename nomli database yaratish.</li>
        <li><b class="heading">USE databasename;</b> - databasename nomli database tanlash.</li>
        <li><b class="heading">SHOW TABLES;</b> - table list.</li>
        <li><b class="heading">DROP DATABASE IF EXISTS databasename;</b> - databasename nomli database bolmasa, tablename
            nomli database ochirish.
        </li>
        <li><b class="heading">DROP DATABASE databasename;</b> - databasename nomli database ochirish.</li>
        <br>

        <li><b class="heading">SHOW DATABASES;</b> - database list.</li>
        <li><b class="heading">SHOW SCHEMAS;</b> - database list.</li>
        <li><b class="heading">SHOW INDEX FROM tablename;</b> - jadvaldagi barcha index keylar ro'yxatini oladi.</li>
        <li><b class="heading">DROP INDEX kayname ON tablename;</b> - jadvaldagi index keyni o'chirish.</li>
        <br>

        <li><b class="heading">SOURCE (source;)</b> - SQL bazani import qilish.</li>
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
        <br>

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


        <h2 class="topic">PostgresSQL commands:</h2>
        <li><b class="heading">CREATE DATABASE IF NOT EXISTS databasename;</b> - databasename nomli database bolmasa,
            databasename nomli database yaratish.
        </li>
        <li><b class="heading">CREATE DATABASE databasename;</b> - databasename nomli database yaratish.</li>
        <li><b class="heading">USE databasename;</b> - tablename nomli database tanlash.</li>
        <li><b class="heading">SHOW TABLES;</b> - table list.</li>
        <li><b class="heading">DROP DATABASE IF EXISTS databasename;</b> - databasename nomli database bolmasa, databasename
            nomli database ochirish.
        </li>
        <li><b class="heading">DROP DATABASE databasename;</b> - databasename nomli database ochirish.</li>
        <br>

        <li><b class="heading">CREATE TABLE tablename ( column1 datatype, column2 datatype, ... );</b> - tablename nomli table yarat.</li>
        <li><b class="heading">ALTER TABLE tablename ADD COLUMN columnname datatype;</b> - tablename nomli jadvalga o'zgartirish kiritish.</li>
        <li><b class="heading">DROP TABLE tablename;</b> - tablename nomli tablename ochirish.</li>
        <br>

        <li><b class="heading">SHOW DATABASES;</b> - database list.</li>
        <li><b class="heading">SHOW SCHEMAS;</b> - database list.</li>
        <li><b class="heading">SHOW INDEX FROM tablename;</b> - jadvaldagi barcha index keylar ro'yxatini oladi.</li>
        <li><b class="heading">DROP INDEX kayname ON tablename;</b> - jadvaldagi index keyni o'chirish.</li>
        <br>

        <li><b class="heading">TRUNCATE TABLE;</b> - butun jadvallarni o'chiradi.</li>
        <li><b class="heading">TRUNCATE TABLE tablename;</b> - jadvaldagi barcha malumotlarni o'chiradi. PRIMARY_KEY ni
            yangilaydi va 1 dan boshlanadi.
        </li>
        <br>

        <h2 class="topic"><a href="https://www.youtube.com/watch?v=UGfteFq_6Co">Install</a> <a
                    href="https://ubuntu.com/server/docs/install-and-configure-postgresql">PostgreSQL</a> on Ubuntu
            22.04</h2>
        </h2>
        <li><b class="heading">sudo apt install postgresql postgresql-contrib</b></li>
        <li><b class="heading">sudo service mysql start</b></li>

        <li><b class="heading">CREATE USER username WITH PASSWORD 'password';</b> - username yaratish va parol qo'yish.</li>
        <li><b class="heading">ALTER USER username CREATEDB;</b> - username boshqa bazalarga kirish va uning boshqa amallarini bajarishga ruxsat bering.</li>
        <li><b class="heading">CREATE DATABASE dbname OWNER username;</b> - username  yangi baza yaratish ruxsatini bering.</li>

        <li><b class="heading">ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'new_password';</b> - root (user) parol yangilash.
        </li>
        <br>

        <li><b class="heading">sudo -i -u postgres</b> - .</li>
        <li><b class="heading">psql</b> - .</li>
        <li><b class="heading">psql -U username -d dbname</b> - .</li>
        <br>

        <li><b class="heading">sudo service mysql status</b></li>
        <li><b class="heading">sudo service mysql restart</b></li>
        <li><b class="heading">sudo service mysql stop</b></li>
        <li><b class="heading">sudo apt-get remove --purge mysql*</b></li>
        <br>

        <li><b class="heading"><a href="https://www.pgadmin.org/download/pgadmin-4-apt/">Install</a> pgmyadmin on Ubuntu 22.04</b></li>
        <li><b class="heading">sudo apt install pgadmin4</b></li>
        <li><b class="heading">sudo apt install pgadmin4-desktop</b></li>
        <li><b class="heading">sudo apt install pgadmin4-web </b></li>

        <img src="/sql/img/1/" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>


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
    <link rel="stylesheet" href="/php/css/main.css">

    <title>File upload</title>
</head>
<body>
<div>
    <h4>Fayl upload qilishda to'rtta asosiy data qaytadi:</h4>
    <ol>
        <li><b class="topic">$_FILES['file']['tmp_name']</b> - yuklangan faylning serverdagi vaqtinchalik joyi.</li>
        <li><b class="topic">$_FILES['file']['name']</b> - yuklangan fayl nomi.</li>
        <li><b class="topic">$_FILES['file']['size']</b> - yuklangan fayl baytlardagi hajmi.</li>
        <li><b class="topic">$_FILES['file']['type']</b> - yuklangan fayl <b>MIME</b> typi.</li>
    </ol>
</div>

<div>
    <form action="/php/pages/upload/download.php" method="post" enctype="multipart/form-data">
        Select image:
        <input type="file" name="image">
        <input type="submit" value="upload image">
    </form>
</div>
</body>
</html>







<?php

$style = "/css/css/main.css";
$title = "Forms";

include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/css/index.php">CSS</a></b></li>
        <li><b><a href="/css/project/index.html">Project</a></b></li>
    </ul>
</div>

<div class="container">
    <img src="/css/img/box/box-model.png" alt="box-model"> <br><br>

    <li><b class="topic">Color palette</b> - dizaynerlar tomonidan ishlatiladigan ranglar toplami</li>
    <br>

    <li><b class="heading"><i>Button ga style berish</i></b><br><br>

        <img src="/css/img/forms/2.png" alt="form-html"> <br><br>
        <img src="/css/img/forms/1.png" alt="form-css"> <br><br>

        <form action="/server.php" method="GET">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id=firstname placeholder="Firstname">

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname">

            <label for="country">Country</label>
            <select name="country" id="country">
                <option value="uzbekistan">Uzbekistan</option>
                <option value="russia">Russia</option>
                <option value="usa">USA</option>
            </select>

            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Message"></textarea>

            <button type="submit" class="button">Submit</button>
            <br><br><br>
        </form>
    </li>

    <li><b class="topic">Radion-button</b> - birneshta variantdan faqat bittasini tanlash form elementi</li>
    <br>

    <label for="Erkak">Erkak</label>
    <input type="radio" name="gender" value="male" id="male">
    <label for="Erkak">Ayol</label>
    <input type="radio" name="gender" value="fimale" id="fimale">
    <br><br><br>

    <h1 class="heading">Style berilgan radio-button</h1>

    <img src="/css/img/forms/radio.png" alt="radio-button"> <br><br>
    <img src="/css/img/forms/radio-CSS-1.png" alt="radio-button-CSS-2"> <br><br>
    <img src="/css/img/forms/radio-CSS-2.png" alt="radio-button-CSS-2"> <br><br>

    <label class="form-control">Radio-1
        <input type="radio"  name="radio" value="radio-1" checked>
        <span class="custom-radio"></span>
    </label>

    <label class="form-control">Radio-2
        <input type="radio" name="radio" value="radio-2">
        <span class="custom-radio"></span>
    </label>

    <label class="form-control">Radio-3
        <input type="radio" name="radio" value="radio-3">
        <span class="custom-radio"></span>
    </label><br><br><br>

    <li><b class="topic">Checkbox</b> - birneshta variantlarni tanlash imkonini beruvchi form elementi</li>
    <br>

    <label for="student">Xa</label>
    <input type="checkbox" name="student" id="student">
    <label for="student-no">Yo'q</label>
    <input type="checkbox" name="student-no" id="student-no"> <br><br><br>

    <h1 class="heading">Style berilgan checkbox</h1>

    <img src="/css/img/forms/checkbox.png" alt="checkbox-button"> <br><br>
    <img src="/css/img/forms/checkbox-CSS-1.png" alt="checkbox-button-CSS-1"> <br><br>
    <img src="/css/img/forms/checkbox-CSS-2.png" alt="checkbox-button-CSS-2"> <br><br>

    <label class="form-control-checkbox">Checkbox-1
        <input type="checkbox" name="checkbox" value="checkbox-1" checked>
        <span class="custom-checkbox"></span>
    </label>

    <label class="form-control-checkbox">Checkbox-2
        <input type="checkbox" name="checkbox" value="checkbox-2">
        <span class="custom-checkbox"></span>
    </label>

    <label class="form-control-checkbox">Checkbox-3
        <input type="checkbox" name="checkbox" value="checkbox-3">
        <span class="custom-checkbox"></span>
    </label>
</div>

<?php
include "../../root/footer.php";
?>


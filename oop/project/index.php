<?php

//use project\Site;

include "Site.php";
include "Category.php";

$uri = $_SERVER['REQUEST_URI'];

print_r($uri);
// /oop/project/index.php/site/contact

echo "<pre>";
$data = explode("/", $uri);
print_r($data);
echo "<br>";

$className = ucfirst($data[4]); // site -> Site
$functionName = $data[5];

$object = new $className();
$object->$functionName();

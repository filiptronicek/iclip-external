<?php

$url = $_GET['url'];

$data = file_get_contents($url);

$ext = explode(".", $url);
$ext = end($ext);

if ($ext != "png" | $ext != "jpg") {
    $ext = "png";
}

header("Content-type: image/{$ext}");
echo $data;
<?php

$url = $_GET['url'];

$data = file_get_contents($url);

$ext = explode(".", $url);
$ext = end($ext);

$headerContent = "";

switch ($ext) {

    /* Application */

    case "pdf":
        $headerContent = "application/pdf";
        break;

    case "js":
        $headerContent = "application/javascript";
        break;

    case "ogg":
        $headerContent = "application/ogg";
        break;  

    case "json":
        $headerContent = "application/json";
        break;

    /* Text */

    case "css":
        $headerContent = "text/css";
        break;

    case "html":
        $headerContent = "text/html";
        break;

    /* Image */

    case "png":
        $headerContent = "image/png";
    
    case "jpg":
        $headerContent = "image/jpeg";
    
}

header("Content-type: image/{$ext}");
echo $data;
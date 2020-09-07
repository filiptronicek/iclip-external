<?php

$url = $_GET['url'];

$data = file_get_contents($url);

$ext = explode(".", $url);
$ext = end($ext);

$headerContent = "";

if (isset($url)) { 
        echo "You have to specify a URL"; 
} else {
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
        break;
    
    case "jpg":
        $headerContent = "image/jpeg";
        break;
    case "svg":
        $headerContent = "image/svg+xml";
        break;

}

    header("Content-type: {$headerContent}");
    echo $data;
}
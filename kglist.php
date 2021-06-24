<?php
$url = $_SERVER["QUERY_STRING"];
if(strpos($url, "https://object.cscs.ch/v1/AUTH_") === 0){
    $ch = curl_init($url);
    curl_exec($ch);
    curl_close($ch);
}

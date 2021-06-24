<?php
$url = $_SERVER["QUERY_STRING"];
if(strpos($url, "https://object.cscs.ch/v1/AUTH_08c08f9f119744cbbf77e216988da3eb/") === 0){
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_HEADER => true,
        CURLOPT_NOBODY => true
    ));
    curl_exec($ch);
    curl_close($ch);
}

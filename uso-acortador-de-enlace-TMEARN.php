<?php
function acortarenlace($usu,$e){
    $usu = 'aaf0e9ef05d1950928c3fa3965574106cdf9c8c4';
    $e   = urlencode ($e);
    $url = "https://tmearn.com/api?api=$usu&url=$e&format=text";

    $xml = file_get_contents($url);

    if (strpos($xml, '{"status":"success","shortenedUrl":"') !== false) {
        $xml = strval ($xml);
        $prueba = json_decode($xml);
        return $prueba->shortenedUrl;
    }

    $prueba = json_decode($xml);
    return isset($xml{5})?$xml: $prueba->shortenedUrl;
}
echo acortarenlace('','http://www.google.com');
?>

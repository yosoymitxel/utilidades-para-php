<?php
function idYoutube($urlYoutube){
    parse_str(parse_url($urlYoutube, PHP_URL_QUERY), $arrayPartesUrl);
    if (isset($arrayPartesUrl['v']) && $arrayPartesUrl['v'] != NULL) {
        $url = $urlYoutube;
        parse_str(parse_url($url, PHP_URL_QUERY), $arrayPartesUrl);
        $urlYoutube = $arrayPartesUrl['v'];
        //var_dump($urlYoutube);
    } else {
        $url = parse_url($urlYoutube);
        $urlYoutube = substr($url['path'], 1);
    }
    return $urlYoutube;
}
echo idYoutube('https://www.youtube.com/watch?v=xV-V_wtv2lY');
?>

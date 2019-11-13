<?php
/*
La función principal es "formatearTextoDescripcion"ç
ahí tú insertas tu texto y saldrá un texto con enlaces funcionales y embed generados de forma automatica
*/
//Conseguir id del video de youtube
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
//Extraer los enlaces de una cadena de caracteres
function extraerURLs($cadena){
    $regex = '/https?\:\/\/[^\" ]+/i';
    preg_match_all($regex, $cadena, $partes);
    $urls = $partes[0];
    foreach($urls as $url){
        if(preg_match('*\b' . 'youtube' . '\b*i', $url)){
            $url_a_reemplazar = '<a href="'.$url.'">'.$url.'</a>';
            $urlIdVideo = idYoutube($url);
            $url_nueva  = '<div class="d-block"><p class="p-0 text-left mb-2"><b>Video asociado:</b> '.$url_a_reemplazar.'</p><iframe width="100%" style="min-height:300px;" src="https://www.youtube.com/embed/'.$urlIdVideo.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
            $cadena     = str_replace($url_a_reemplazar,$url_nueva,$cadena);
        }
    }
    return ($cadena);
}

function formatearTextoDescripcion($texto) {
    //filtro los enlaces normales
    $cadena_resultante = preg_replace("/((http|https|www)[^\s]+)/", '<a href="$1">$0</a>', $texto);

    //miro si hay enlaces con solamente www, si es así le añado el http://
    $cadena_resultante = preg_replace("/href=\"www/", 'href="http://www', $cadena_resultante);
    $cadena_resultante = extraerURLs($cadena_resultante);
    return $cadena_resultante;
}

$cadena_origen = 'Podría poner texto aquí https://www.youtube.com/watch?v=xV-V_wtv2lY y otros datos como http://www.facebook.com/';

echo formatearTextoDescripcion($cadena_origen);
?>

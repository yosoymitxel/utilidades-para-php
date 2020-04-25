<?php
function get_youtube_title($video_id){
    $video_id = $video_id;
    $url = "http://www.youtube.com/watch?v=".$video_id;

    $page = file_get_contents($url);
    $doc = new DOMDocument();
    $doc->loadHTML($page);

    $title_div = $doc->getElementById('eow-title');
    $title = $title_div->nodeValue;

    return ($title);
}

get_youtube_title('QXZ9M1p7TS3j');

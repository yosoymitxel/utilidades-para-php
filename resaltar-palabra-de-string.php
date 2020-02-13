<?php 
function sc_resaltar_texto($t,$busqueda,$class=null){
    return (isset($t{1}) && isset($busqueda{1}))?str_replace($busqueda,"<b class='$class'>$busqueda</b>",$t):false;
}

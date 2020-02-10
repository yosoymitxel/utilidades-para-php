<?php
function redireccionar($url)
{
   header('Location: ' . $url, true, 303);
   die();
}

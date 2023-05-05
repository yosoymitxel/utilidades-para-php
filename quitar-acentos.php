function dev_str_quitar_acentos($t){
  setlocale(LC_ALL, "en_US.utf8");
  return iconv("utf-8", "ascii//TRANSLIT", $t);
}

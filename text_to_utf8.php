function text_to_utf8($t){
    setlocale(LC_ALL, "en_US.utf8");
    return iconv('UTF-8', 'ASCII//TRANSLIT', $t);
}

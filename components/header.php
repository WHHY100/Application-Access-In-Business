<?php

require_once 'include/functions.inc.php';

const PATH_HEADER = 'views/header.html';
const STR_SEARCH = '%title%';
const STR_REPLACE = "Aplikacje Dla Twojej Firmy";
const BUTTONS = ['%button1%', '%button2%', '%button3%', '%button4%'];


$header = file_get_contents(PATH_HEADER);
$header = str_replace(STR_SEARCH, STR_REPLACE, $header);

for ($i = 0; $i < count(BUTTONS); $i++) {
    $buttons = getValue(null, $i + 1);
    $header = str_replace(BUTTONS[$i], $buttons, $header);
}

echo $header;
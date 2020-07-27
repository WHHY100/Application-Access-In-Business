<?php

require_once 'include/functions.inc.php';

const PATH_CONTENT = 'views/content/contentMain.html';
const HEADER_SEARCH = '%header%';
const HEADER_CONTENT = '%header_content%';
const CONTENT = '%content_author%';

if (!isset($_GET['page']))
    $getPage = null;
else
    $getPage = $_GET['page'];

$content = file_get_contents(PATH_CONTENT);

$replaceHeader = getValue($getPage, 0);
$content = str_replace(HEADER_SEARCH, STR_REPLACE, $content);

$replaceTitle = getValue($getPage, 6);
$content = str_replace(HEADER_CONTENT, $replaceTitle, $content);

$replaceContent = getValue($getPage, 7);
$content = str_replace(CONTENT, $replaceContent, $content);

echo $content;

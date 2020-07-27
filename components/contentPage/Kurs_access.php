<?php

require_once 'include/functions.inc.php';

const TITLE_ACCESS = '%application_content%';
const SECOND_TITLE_ACCESS = '%tip_content%';
const SECTION_NAME_ACCESS = '%name_section%';
const VIDEO_NAME_ACCESS = '%app_video%';

const CONTENT_ACCESS_TUTORIAL = 'views/content/contentApplicationDownload.html';
const CONTENT_ACCESS_VIEW = 'views/appViews/sqlView.html';
const TABLE_VIDEO_ACCESS = 'kurs_access';

$content = file_get_contents(CONTENT_ACCESS_TUTORIAL);

$titleAccess = getValue($_GET['page'], 0);

$content = str_replace(TITLE_ACCESS, $titleAccess, $content);

$secondTitleAccess = getValue($_GET['page'], 1);

$content = str_replace(SECOND_TITLE_ACCESS, $secondTitleAccess, $content);

echo $content;

$arraySQL = getValuesTable(TABLE_VIDEO_ACCESS);

for ($i = 0; $i < count($arraySQL); $i++) {
    $arraySQLContent = explode(EXPLODE_CHAR, $arraySQL[$i]);

    $contentVideo = file_get_contents(CONTENT_ACCESS_VIEW);

    $titleVideo = getValuesTable(TABLE_VIDEO_ACCESS);

    $contentVideo = str_replace(SECTION_NAME_ACCESS, $arraySQLContent[2], $contentVideo);

    $contentVideo = str_replace(VIDEO_NAME_ACCESS, $arraySQLContent[3], $contentVideo);

    echo $contentVideo;
}

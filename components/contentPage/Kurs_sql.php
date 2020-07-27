<?php

require_once 'include/functions.inc.php';

const TITLE = '%application_content%';
const SECOND_TITLE = '%tip_content%';
const SECTION_NAME = '%name_section%';
const VIDEO_NAME = '%app_video%';

const CONTENT_SQL_TUTORIAL = 'views/content/contentApplicationDownload.html';
const CONTENT_SQL_VIEW = 'views/appViews/sqlView.html';
const TABLE_VIDEO_SQL = 'kurs_sql';

$title = getValue($_GET['page'], 0);

$content = file_get_contents(CONTENT_SQL_TUTORIAL);

$content = str_replace(TITLE, $title, $content);

$secondTitle = getValue($_GET['page'], 1);

$content = str_replace(SECOND_TITLE, $secondTitle, $content);

echo $content;

$arraySQL = getValuesTable(TABLE_VIDEO_SQL);

for ($i = 0; $i < count($arraySQL); $i++) {
    $arraySQLContent = explode(EXPLODE_CHAR, $arraySQL[$i]);

    $contentVideo = file_get_contents(CONTENT_SQL_VIEW);

    $titleVideo = getValuesTable(TABLE_VIDEO_SQL);

    $contentVideo = str_replace(SECTION_NAME, $arraySQLContent[2], $contentVideo);

    $contentVideo = str_replace(VIDEO_NAME, $arraySQLContent[3], $contentVideo);

    echo $contentVideo;
}

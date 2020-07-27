<?php

require_once 'include/functions.inc.php';

const PATH_APP_ACCESS = 'views/content/contentApplicationDownload.html';
const APPLICATION_CONTENT = '%application_content%';
const TIP_CONTENT = '%tip_content%';

const PATH_APP_VIEW = 'views/appViews/appView.html';
const APP_NAME = '%application_name%';
const APP_VIDEO = '%app_video%';
const APP_LINK = '%link_app%';
const APP_DESCRIPTION = '%app_description%';

const TABLE_APP_ACCESS = 'aplikacje_do_pobrania';

if (!isset($_GET['page']))
    $getPage = null;
else
    $getPage = $_GET['page'];

$content = file_get_contents(PATH_APP_ACCESS);

$replaceTitleApplication = getValue($getPage, 0);
$content = str_replace(APPLICATION_CONTENT, $replaceTitleApplication, $content);

$replaceTipContent = getValue($getPage, 1);
$content = str_replace(TIP_CONTENT, $replaceTipContent, $content);

echo $content;

$arrayApp = getValuesTable(TABLE_APP_ACCESS);

for ($i = 0; $i < count($arrayApp); $i++) {
    $app = explode(EXPLODE_CHAR, $arrayApp[$i]);

    $contentApp = file_get_contents(PATH_APP_VIEW);

    $contentApp = str_replace(APP_NAME, $app[2], $contentApp);

    $contentApp = str_replace(APP_DESCRIPTION, $app[3], $contentApp);

    $contentApp = str_replace(APP_VIDEO, $app[4], $contentApp);

    $contentApp = str_replace(APP_LINK, $app[5], $contentApp);

    echo $contentApp;
}

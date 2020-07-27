<?php

const EXPLODE_CHAR = "|";

const PAGES = ['Aplikacje_acces', 'Kurs_sql', 'Kurs_access'];

/**
 * @param $page
 * @param int $numberValue
 * @return string
 */
function getValue($page, int $numberValue): string
{
    $page = filter_var($page, FILTER_SANITIZE_STRING);

    $header = new \App\Content\ReadContent();

    $content = $header->getContent($page);
    $valuesArray = explode(EXPLODE_CHAR, $content[$numberValue]);

    return $valuesArray[2];
}

/**
 * @param $page
 * @return string
 */
function rightPage($page)
{
    if (!isset($page))
        return 'components/contentMain.php';

    $page = filter_var($page, FILTER_SANITIZE_STRING);

    if (!in_array($page, PAGES))
        return 'components/errorPage.php';

    return 'components/contentPage/' . $page . '.php';
}

/**
 * @param string $page
 * @return array
 */
function getValuesTable(string $page)
{
    $app = new \App\Content\ReadTable();

    return $app->getResult($page);
}
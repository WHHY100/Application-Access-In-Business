<?php

if (!isset($_GET['page']))
    $getPage = null;
else
    $getPage = $_GET['page'];

$page = rightPage($getPage);
require $page;
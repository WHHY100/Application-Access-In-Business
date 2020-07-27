<?php

const PATH_ERROR = 'views/errorPage.html';

$content = file_get_contents(PATH_ERROR);

echo $content;

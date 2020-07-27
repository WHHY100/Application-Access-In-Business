<?php

const GITHUB_LINK = '%link%';
const PATH_FOOTER = 'views/footer.html';
const TYPE_FOOTER = '%type_footer%';

if (!isset($_GET['page']))
    $footerType = 'fixed';
else
    $footerType = 'static';

$linkGH = getValue(null, 8);

$footer = file_get_contents(PATH_FOOTER);

$footer = str_replace(GITHUB_LINK, $linkGH, $footer);

$footer = str_replace(TYPE_FOOTER, $footerType, $footer);

echo $footer;
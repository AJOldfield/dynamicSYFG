<?php
/*** *** *** *** *** ***
* @package   Quadodo Login Script
* @file      database_info.php
* @author    Douglas Rennehan
* @generated January 8th, 2016
* @link      http://www.quadodo.net
*** *** *** *** *** ***
* Comments are always before the code they are commenting
*** *** *** *** *** ***/
if (!defined('QUADODO_IN_SYSTEM')) {
exit;
}

define('SYSTEM_INSTALLED', true);
$database_prefix = 'SYFG_';
$database_type = 'MySQLi';
$database_server_name = 'gmpspace.com.mysql';
$database_username = 'gmpspace_com';
$database_password = 'Bpj34yE6';
$database_name = 'gmpspace_com';
$database_port = false;

/**
 * Use persistent connections?
 * Change to true if you have a high load
 * on your server, but it's not really needed.
 */
$database_persistent = false;
?>
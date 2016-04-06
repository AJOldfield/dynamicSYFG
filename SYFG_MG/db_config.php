<?php
/**
 * Database Constants - these constants are required
 * in order for there to be a successful connection
 * to the MySQL database. Make sure the information is
 * correct.
 */

define("DB_SERVER", "gmpspace.com.mysql");
define("DB_USER", "gmpspace_com");
define("DB_PASS", "Bpj34yE6");
define("DB_NAME", "gmpspace_com");

/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TABLE_PREFIX", "SYFG_");


$dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);


?>
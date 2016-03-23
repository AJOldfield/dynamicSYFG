<?php
/**
 * Database Constants - these constants are required
 * in order for there to be a successful connection
 * to the MySQL database. Make sure the information is
 * correct.
 */

define("DB_SERVER", "aa10r7r3qejzka.ci1kl8osdycj.ap-southeast-2.rds.amazonaws.com:3306");
define("DB_USER", "aj_syfg");
define("DB_PASS", "Turner2612");
define("DB_NAME", "SYFG1");

/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TABLE_PREFIX", "SYFG_");


$dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);


?>
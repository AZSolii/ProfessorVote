<?php
/**
Pulse Lite Voting Script
http://s.technabled.com/PulseVote
**/
session_start();
ob_start();
error_reporting(E_ALL-E_NOTICE);

define('PULSE_DIR', '../app/Pulse'); // absolute path of the dir where Pulse is; WITHOUT trailing slash

/** DATABASE CONNECTION CONFIGURATION **/
define('HOSTNAME', 'localhost'); // hostname of your database; it is localhost in most cases
define('USERNAME', 'root'); // username of the database
define('PASSWORD', 'root'); // password for the database
define('DATABASE', 'ProfessorVote'); // name of the database

@mysql_connect(HOSTNAME, USERNAME, PASSWORD);
@mysql_select_db(DATABASE);

?>
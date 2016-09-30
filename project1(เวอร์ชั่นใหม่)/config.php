<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_DB','led');

define('DB_NAME','utf8');

$GLOBALS['mysqli']=null;

function db()
{
	return $GLOBALS['mysqli'];
}

function connect_db()
{
	$GLOBALS['mysqli']= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DB);
	db()->query('SET NAMES "'.DB_NAME.'"');
}
?>

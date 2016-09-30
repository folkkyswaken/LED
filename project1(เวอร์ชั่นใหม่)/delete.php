<?php

include 'config.php';
connect_db();

$query = db()->query('DELETE FROM led WHERE id = "'. $_GET['Id'] .'" LIMIT 1');

echo db()->error;
	header('Location: Led.php');
?>

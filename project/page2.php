<?php
include 'config.php'; 
$Name= $_POST['Name'];
$mysqli->query('INSERT INTO LED (
	Name
) 
VALUES (
	"'. $Name .'"
)');
echo $mysqli->error;

header('Location:index.php');
?>
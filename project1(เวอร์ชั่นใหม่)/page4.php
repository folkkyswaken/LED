<?php

if(!isset($_POST['Name']))
{
	die('Welcome Hacker!!');
}
include 'config.php';
connect_db();

$Name= db()->real_escape_string($_POST['Name']);
$Id= db()->real_escape_string($_POST['Id']);

if(strlen($Name) <= 0)
{
	die('คุณยังไม่ได้กรอกข้อความตัวอักษร');
}

$query = db()->query('SELECT Id FROM led WHERE Name = "'. $_GET['Id'] .'" LIMIT 1');

db()->query('UPDATE led SET
Name="'.$Name.'"
WHERE Id="'.$Id.'"
LIMIT 1');
	header('Location: Led.php');

?>

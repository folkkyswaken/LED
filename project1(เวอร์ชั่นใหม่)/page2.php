<?php

if(!isset($_POST['Name']))
{
	die('Welcome Hacker!!');
}
include 'config.php';
connect_db();

$Name= db()->real_escape_string($_POST['Name']);

if(strlen($Name) <= 0)
{
	die('คุณยังไม่ได้กรอกข้อความตัวอักษร');
}
$query = db()->query('SELECT Id FROM led WHERE Name = "'. $Name .'" LIMIT 1');

db()->query('INSERT INTO led
(
	Name
)
VALUES
(
"'. $Name .'"
)');
echo db()->error;
	header('Location: Led.php');

?>

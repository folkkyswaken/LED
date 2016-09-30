<?php
if(!isset($_POST['username']) && !isset($_POST['password']))
{
	die('Welcome Hacker!!');
}
session_start();
include 'config.php';
connect_db();

$username=$_POST['username'];
$password=$_POST['password'];

$query=db()->query('SELECT memberId
FROM members WHERE memberName = "'. $username .'" AND
memberPass="'. $password .'" LIMIT 1');

echo db()->error;

if($query->num_rows>0)
{
    //ผ่าน
    $_SESSION['login']=true;
    header('Location:Led.php');
    die();
}
else
{
  //ไม่ผ่าน
  header('Location:index.html');
  die();
}
?>

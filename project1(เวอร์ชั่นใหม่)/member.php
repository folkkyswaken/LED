<?php
session_start();
if(!isset($_SESSION['login']))
{
  header('Location:index.html');
  die();
}


?> Hi!! Admin <a href="logout.php">Logout</a>

<?php
$dbHost= 'localhost';
$dbUser= 'root';
$dbPassword= '';
$dbName= 'project';
$mysqli= new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
$mysqli->query('SET NAMES "utf8"');
?>
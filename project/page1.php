<?php
include 'config.php'; 
$Name= $_POST['Name'];
$ID= $_POST['ID'];

$s=sprintf('UPDATE LED SET
Name="%s"
WHERE ID="%s"
LIMIT 1',
$Name,$ID);
$mysqli->query($s);

header('Location:index.php');

?>
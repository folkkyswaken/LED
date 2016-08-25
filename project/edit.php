<?php
include 'config.php';

$query = $mysqli->query('SELECT ID, Name
FROM LED WHERE ID = "'.$_GET['ID'].'"LIMIT 1');

list($ID, $Name) = $query->fetch_row();
echo $ID;

?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
 </head>
 <body>

	<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page1.php" method="post">

	<div class="form-group">
		<div class="col-sm-6"></div>
		<div class="bg-primary">
		<center><h4><FONT COLOR="#FFFFFF" size="6">
	ระบบLED   
   </FONT></div>
		<center><h4><FONT COLOR="#3399FF" size="3">
	แบบจำลองระบบLED</h4></center>
   
   </FONT>
		<div class="col-sm-6">
		</div>
	</div>
   
	<div class="form-group">
		<label class="col-sm-2 control-label" >ข้อความตัวอักษร:</label>
		<div class="col-sm-8">
			<input type="text" name="Name" class="form-control" value="<?php echo $Name;?>">
		</div>

	<center>
	 <div class="form-group">
	<div class="col-sm-10"></div>
	<div class="col-sm-12">
	<input type="hidden" name="ID" value="<?php echo $_GET['ID'];?>">
	 <input a class="btn btn-primary" type="submit" value="แก้ไขข้อมูล"></a></div>
	 </div>
	 </center>

  </form>
  </div>
</div>
 
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
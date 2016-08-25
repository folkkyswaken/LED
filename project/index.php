<?php
include 'config.php';
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
	<form class="form-horizontal" action="page2.php" method="post">

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
			<input type="text" name="Name" class="form-control">
		</div>
	</div>
	<center>
	 <div class="form-group">
	<div class="col-sm-15"></div>
	<div class="col-sm-15">
	 <input a class="btn btn-primary" type="submit" value="ยืนยันข้อความ"></a></div>
	 </div>
	 </center>

  </form>
  </div>
</div>
  
  <table class="table table-condensed">
	<tr>
		<td>ID</td>
		<td>Name</td>
	</tr>
<?php
$query = $mysqli->query('SELECT ID, Name FROM LED');
while(list($ID, $Name) = $query->fetch_row())
{
?>
<tr>
		<td><?php echo $ID;?></td>
		<td><?php echo $Name;?></td>
		<td><a href="edit.php?ID=<?php echo $ID;?>">แก้ไข</a></td>
		</tr>
<?php
}
?>
</table>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
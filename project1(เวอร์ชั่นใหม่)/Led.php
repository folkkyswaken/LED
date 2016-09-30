<?php
include 'config.php';
connect_db();
?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title >Project LED</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bg.css" rel="stylesheet">

</head>

<body>
	<!--=============================================================================== -->
<div class="container">
	<div class="row">
		<label class="col-sm-10 control-label"></label>
		<div class="col-sm-2">
		<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
	  header('Location:index.html');
	  die();
	}
	?>
	<a href="logout.php"><input type="submit" name="sing_up" value="ออกจากระบบ" class="btn btn-info"></button></a>
</div>
</div>
</div>
	<!--=============================================================================== -->
	<div class="container">
    <center>
      <font face="WR Tish Kid" color="#FF9900">
        <h1>
          <b>
            ระบบควบคุมป้ายไฟ LED
          </b>
        </h1>
      </font>
    </center>
    <!--======================FORM===================FORM===================FORM-->
      <div class="row">
          <form class="form-horizontal" action="page2.php" method="post">

            <!-- =======================NAME================ -->
            <div class="form-group">
            <label class="col-sm-4 control-label">
              <font color="#191970">
                  ข้อความตัวอักษร
                </font>
            </label>
            <div class="col-sm-4">
              <input class="form-control" type="varchar" name="Name" placeholder="กรุณาใส่ข้อความตัวอักษร">
            </div>
          </div>
            
			 <center>
				<input type="submit" name="sing_up" value="บันทึก" class="btn btn-info"></button>
			 </center>
          <!--  =====================CLOSE================== -->
        </form>
        </div>
      </div>
		<br>
		<br>
<div class="row">
	<label class="col-sm-3"></label>
	<div class="col-sm-6">
		<table class="table table-hover">
			<tr>
				<td class="danger">ลำดับ</td>
				<td class="warning">ข้อความตัวอักษร</td>
				<td class="info">แก้ไข</td>
				<td class="active">ลบ</td>
			</tr>
			<?php
				$query = db()->query('SELECT Id, Name from led');
				while(list($Id, $Name)=$query->fetch_row())
				{
			?>
			<tr>
				<td class="danger"><?php echo $Id;?></td>
				<td class="warning"><?php echo $Name;?></td>
				<td class="info">
					<a href="edit.php?Id=<?php echo $Id;?>">
						แก้ไข
					</a>
				</td>
				<td class="active">
					<a href="delete.php?Id=<?php echo $Id;?>">
						ลบ
					</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
	</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>

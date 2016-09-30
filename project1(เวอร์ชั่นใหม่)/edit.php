<?php
include 'config.php';
connect_db();
	$query = db()->query('SELECT Id, Name
	FROM led WHERE Id="'.$_GET['Id'].'" LIMIT 1');
	list($Id, $Name)=$query->fetch_row();
?>
<!doctype html>
<html lang="en">
<head>
<input type="hidden" name="Id" value="<?php echo $_GET['Id'];?>">
<meta charset="UTF-8">
<title >Project LED</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bg_edit.css" rel="stylesheet">
</head>

<body>
	<div class="container" style="margin-top:178px; ">
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
          <form class="form-horizontal" action="page4.php" method="post">

            <!-- =======================NAME================ -->
            <div class="form-group">
            <label class="col-sm-4 control-label">
              <font color="#fff">
                  ข้อความตัวอักษร
                </font>
            </label>
            <div class="col-sm-4">
              <input class="form-control" type="varchar" name="Name" value="<?php echo $Name; ?>">
            </div>
          </div>
           
				<!-- ================================================================= -->
					<center>
						<input type="hidden" name="Id" value="<?php  echo $_GET['Id']; ?>">
						<input type="submit" name="sing_up" value="เสร็จสิ้น" class="btn btn-info">
					</center>
          <!--  =====================CLOSE================== -->
        </form>
        </div>

      </div>

		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	</html>

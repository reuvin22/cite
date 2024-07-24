<?php
$con = mysqli_connect("localhost", "root", "", "account_student");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="windoww.css">
	<style>
</style>
	<title></title>
</head>
<body>
<div class="whole">
	<div class="firstfloat">
		<h1>DASHBOARD</h1>
		<img src="images/it.png">
	</div>
	<div class="body">
		<?php
			$sql = "SELECT * FROM data where user = '".$_SESSION['user']."'";
			$sth = $con->query($sql);
			$result=mysqli_fetch_array($sth);
		?>
		<div class="container">
			<img src="images/background.png" style="position: relative;">
			<div class="bottom">
		<h1 style="font-size: 30px; justify-content:center;" class="hello" >Hello! <?php echo $result['fname']; ?>, Welcome to WebCite</h1>
	</div>
		</div>
	</div>
	<div class="bottom">
		<h1 style="font-size: 30px">College of Information Technology</h1>
	</div>
</div>
</body>
</html>
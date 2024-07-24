<?php
$con = mysqli_connect('localhost', 'root','','account_student');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="profilee.css">
	<title>PROFILE</title>
</head>
<body>
<div class="whole">
	<div class="firstfloat">
		<h1>INFORMATION</h1>
		<img src="images/it.png">
	</div>
	<div class="body">
		<img src="images/background.png">
	</div>
	<div class="bottom">
		<h2>USER PROFILE</h2>
		<?php
		$sql = "SELECT * FROM data where user='".$_SESSION['user']."'";
		$query = mysqli_query($con, $sql);
		$result = mysqli_fetch_assoc($query);
		?>
		<div class="group">
		<h1>Name: <?php echo $result['lname'],', ', $result['fname'],' ', $result['minitial'],'.';?></h1>
		<h1>Student No.: <?php echo $result['studentno'];?></h1>
		<h1>Year: <?php echo $result['year'];?></h1>
		<h1>Age: <?php echo $result['age'];?></h1>
		<h1>Gender: <?php echo $result['gender'];?></h1>
		<h1>Course: <?php echo $result['course'];?></h1>
		<h1>Status: </h1>
		</div>
		<h3 style="font-size: 30px">College of Information Technology</h3>
	</div>
</div>
</body>
</html>


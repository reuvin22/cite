
<?php
include('conn.php');
if(isset($_POST['submit']))
{
	if($_POST['user']!="" OR $_POST['pass']!="")
	{
		$sql = "Select * from data where user='$_POST[user]' and pass='$_POST[pass]'";
		$result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
		$num=mysqli_num_rows($result);
		$_Session['user']=$row[0];
		if($row['usertype']=="admin"||"Admin")
		{
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<frameset cols="20%,80%">
					<frameset rows="20%,80%">
						<frame src="picture.php">
						<frame src="dashboardtruetruetrue.php"></frame>
					</frameset> 
				<frame name="window" src="window.php"> </frame>
			
			</frameset>
			</head>

			<body>
			
			</body>
			</html>
			<?php
		}
		elseif($row['usertype']== "users" || "Users")
		{
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<frameset cols="20%,80%">
					<frameset rows="20%,80%">
						<frame src="picture.php">
						<frame src="dashboardtruetrue.php"></frame>
					</frameset> 
				<frame name="window" src="window.php"> </frame>
			
			</frameset>
			</head>

			<body>
			
			</body>
			</html>
			<?php
		}
		else{
			
			echo "<script>alert
			    ('Incorrect username and password and school id')
				</script>";
			echo "<script>";
			echo 'window.location.replace
				 ("cite.php")';
			echo "</script>";
		}
}
}
		?>

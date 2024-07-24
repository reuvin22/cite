<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'account_student');
if($conn==false)
{
    die('connection error');

}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM data where user='".$user."' AND pass='".$pass."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row['usertype'] == 'Admin')
    {
		$_SESSION['user'] = $user;
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
    elseif($row['usertype'] == 'Users')
    {
		$_SESSION['user'] = $user;
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
    else
    {
        echo "<script>alert
			    ('Incorrect username and password and school id')
				</script>";
			echo "<script>";
			echo 'window.location.replace
				 ("cite.php")';
			echo "</script>";
    }
}
?>
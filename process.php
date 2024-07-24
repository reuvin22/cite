<?php

$mysqli = new mysqli('localhost', 'root', '', 'naomi') or die (mysqli_error($mysqli));

$ID = 0;
$update = false;
$stdID = '';
$stdFName = '';
$stdLName = '';
$stdAge = '';
$stdCYS = '';
$stdEmail = '';

if (isset($_POST['save'])){
	$stdID = $_POST['IStdID'];
	$stdFName = $_POST['IFName'];
	$stdLName = $_POST['ILName'];
	$stdAge = $_POST['IAge'];
	$stdCYS = $_POST['IStdCYS'];
	$stdEmail = $_POST['IEmail'];

	if ( (!empty($stdID)) || (!empty($stdFName)) || (!empty($stdLName)) || (!empty($stdAge)) || (!empty($stdCYS)) || (!empty($stdEmail)) ) {

		$mysqli->query("SELECT stdinfo (stdID, stdFName, stdLName, stdAge, stdEmail) VALUES ('$stdID', '$stdFName', '$stdLName', '$stdAge', '$stdEmail')") or die ($mysqli->error);

	
	} //display
	else
	{
		echo("<div class='alert alert-danger'>
							<strong>Please Fill out the Form!!!
						</div>");
	}

	
}

if (isset($_GET['delete'])){
	$ID = $_GET['delete'];
	$mysqli->query("DELETE FROM naomi WHERE num=$ID") or die ($mysqli->error());

	header("location:display.php");
	exit();
}
if (isset($_GET['edit'])){
	$ID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM naomi WHERE num=$ID") or die ($mysqli->error());
		
	$row = $result->fetch_array();
	$num=$row['num'];
	$user=$row['user'];
	$pass=$row['pass'];
	$favoritecolor=$row['favoritecolor'];
	}


if (isset($_POST['update'])){
	$ID = $_POST['num'];
	$num=$_POST['num'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$favoritecolor=$_POST['favoritecolor'];
	

	

	$mysqli->query("UPDATE naomi SET num='$num',num='$num',user='$user',pass='$pass', favoritecolor='$favoritecolor' WHERE num='$ID'") or die ($mysqli->error);

	header("location:display.php");
	exit();
}
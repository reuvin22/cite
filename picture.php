<?php
$con = mysqli_connect("localhost", "root", "", "account_student");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="picture.css">
	<title></title>
</head>
<body>
<div class="whole">
<?php  
        $db = mysqli_connect("localhost","root","","account_student"); 
        $sql = "SELECT * FROM data where user = '".$_SESSION['user']."'";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
        echo "<center><h4>".$result['fname']."</h4></center>";
    ?> 
    
	<h1></h1>
</div>
</body>
</html>
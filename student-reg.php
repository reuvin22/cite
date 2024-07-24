<?php
if(isset($_POST['submit'])) {
    $img_name = $_FILES['image']['name'];
    $tmp_img_name = $_FILES['image']['tmp_name'];
    $folder = "SELECT image FROM data";
    move_uploaded_file($tmp_img_name, $folder.$image);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="upcomingg.css">
	<title></title>
</head>
<body>
<div class="whole">
		<div class="firstfloat">
		<h1>Registration</h1>
	</div>
	<form class="registration" action="connection.php" method="POST" enctype="multipart/form-data style="margin-top: 5%;">
		<label for="user">Username: </label><input type="text" name="user" id="user" class="user" style="margin-top: 1%; height:20px; width: 250px;" required><br>
		<label for="pass">Password: </label><input type="password" name="pass" id="pass" class="pass" style="margin-top: 2%; height:20px; width: 250px;" required><br>
		<label for="fname">First name: </label><input type="text" name="fname" id="fname" class="fname" style="margin-top: 2%; height:20px; width: 250px;" required><br>
		<label for="lname">Last name: </label><input type="text" name="lname" id="lname" class="lname" style="margin-top: 2%;  height:20px; width: 250px;" required><br>
		<label for="minitial">Middle Initial: </label><input type="text" name="minitial" id="minitial" class="minitial" style="margin-top: 2%; height:20px; width: 250px;" required><br>
		<label for="studentno">Student No.: </label><input type="text" id="studentno" name="studentno" class="studentno" style="margin-top: 2%; margin-bottom: 2%;  height:20px; width: 250px;" required><br>
		<label for="age">Age: </label><input type="text" name="age" id="age" class="age style="margin-top: 2%; height:20px; width: 250px;" required><br>
		<label for="nationality">Nationality: </label><input type="text" name="nationality" id="nationality" class="nationality" style="margin-top: 2%; height:20px; width: 250px;" required><br>
		<label for="gender">Gender: </label><select id="gender" class="gender" name="gender" style="margin-top: 2%;"><option> Male </option><option> Female</option></select><br>
		<label for="age">Course: </label><select name="course" id="course" class="course" style="margin-top: 2%;" required><option> BSIT </option><option> BSCS</option></select><br>
		<label for="year">Year: </label><select id="year" class="year" name="year" style="margin-top: 2%;"><option> 1st year </option><option> 2nd year</option><option> 3rd year</option><option> 4th year</option></select><br>	
		<label for="mobile">Mobile number: </label><input type="number" name="mobile" id="mobile" class="mobile" style="margin-top: 2%; margin-bottom: 2%; height:20px; width: 250px;" required><br>
		<label for="major_course">Major Course Title: </label><select id="major_course" class="major_course" name="major_course" style="margin-top: 2%;"><option> Web </option><option> Sofware Engineer</option></select><br>
		<label for="civil_status">Civil Status: </label><select id="civil_status" class="civil_status" name="civil_status" style="margin-top: 2%;"><option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option></select><br>
		<label for="newold_student">New/Old Student: </label><select id="newold_student" class="newold_student" name="newold_student" style="margin-top: 2%;"><option>New</option><option>Old</option></select><br><br>
<label for="usertype">User type: </label><select class="usertype" name="usertype" id="usertype" style="margin-bottom: 2%;"><option>Users</option><option>Admin</option></select><br>
		<label for="sem">Semester: </label><select class="sem" name="sem" id="sem" style="margin-bottom: 2%;"><option>1st</option><option>2nd</option></select><br>
		<label for="image">Upload file: </label><input type="file" name="image" id="image" class="image" style="margin-top: 2%; margin-bottom: 2%; height:20px; width: 250px;" required><br>
		<button type="submit" class="submit" name="submit" style="margin-right: 2%;">Submit</button><button>Cancel</button>
	</form>
</div>
</body>
</html>


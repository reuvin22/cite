<?php
$con = mysqli_connect("localhost", "root", "", "account_student");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="preadvising.css">
	<title>PRE-ADVISING</title>
</head>
<body>
<div class="whole">
	<div class="firstfloat">
		<h1>PRE-ADVISING</h1>
		<img src="images/it.png">
	</div>
	<div class="secondfloat">
		<form action="" method="POST" class="form-preadvising">
		<div class="block" style="text-align: left;"><b>CS/IT/ACT 1-BLOCK I</b></div><div class="student_copy" style="margin-left: 65%;"><b>Student's Copy</b></div>
		<div class="preadvising" style="text-align:left;"><b>Pre Advising Form</b></div>
		<?php
		$sql = "SELECT * FROM data where user='".$_SESSION['user']."'";
		$query = mysqli_query($con, $sql);
		$result = mysqli_fetch_assoc($query);
		?>
		<div style="margin-left: 66%":><b>Student No: <?php echo $result['studentno'];?></b></div><br>
		<div style="margin-left: 64.5%":><b>Mobile No: <?php echo $result['mobile'];?></b></div>
		<div style="text-align: left;"><b> <?php echo $result['sem'];?> Semester S.Y. 2022-2023</b></div><br>
		<h4 style="text-align: left;":><b>Surname: <?php echo $result['lname'];?> &nbsp; &nbsp; First name: <?php echo $result['fname'];?></b></h4>
		<h4 style="text-align: left;":><b>Course Title: <?php echo $result['course'];?>&nbsp; &nbsp; Major Course Title: <?php echo $result['major_course'];?></b></h4>
		<h4 style="text-align: left;":><label for="new_student">New/Old student: <?php echo $result['new/old_student'];?>&nbsp; &nbsp; Sex: <?php echo $result['gender'];?>&nbsp; &nbsp; Civil Status: <?php echo $result['civil_status'];?>&nbsp; &nbsp; Nationality: <?php echo $result['nationality'];?></b></h4></br>
</div>
    <center>
        <div>
			<table>
			<tr>
				<th>SUBCODE</th>
				<th>DESCRIPTION</th>
				<th>UNIT</th>
				<th>TIME</th>
				<th>DAYS</th>
				<th>ROOM</th>
			</tr>
			<tr>
				<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td><select style="border: 0px;">
					<option>CC 101</option>
					<option>MS 101</option>
					<option>GE 2</option>
					<option>GE 1</option>
					<option>CC 102</option>
					</select></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table><br>
		<button type="submit" class="submit" id="submit" onClick="approval()">Submit</button><br>
</div>
		  <center><h3>Available Subjects</h3>
		  <table>
			<tr>
				<th>SUBCODE</th>
				<th>DESCRIPTION</th>
				<th>UNIT</th>
				<th>TIME</th>
				<th>DAYS</th>
				<th>ROOM</th>
			</tr>
			<tr>
				<td>CC 101</td>
				<td>Introduction to Computing</td>
				<td>3</td>
				<td>8:00-11:15</td>
				<td>MTH</td>
				<td>ITB 304</td>
			</tr>
			<tr>
				<td>MS 101</td>
				<td>Discrete Structure</td>
				<td>3</td>
				<td>12:00-2:00</td>
				<td>MTH</td>
				<td>ITB 304</td>
			</tr>
			<tr>
				<td>GE 2</td>
				<td>Science Technology and Society</td>
				<td>3</td>
				<td>2:00-4:00</td>
				<td>MTH</td>
				<td>ITB 304</td>
			</tr>
			<tr>
				<td>SOCARTS 1</td>
				<td>Social Arts 1</td>
				<td>3</td>
				<td>7:30-8:30</td>
				<td>T</td>
				<td>ITB 304</td>
			</tr>
			<tr>
				<td>GE 1</td>
				<td>Mathematics in the Modern World</td>
				<td>3</td>
				<td>9:30-11:30</td>
				<td>TF</td>
				<td>ITB 304</td>
			</tr>
			<tr>
				<td>CC 102</td>
				<td>Computer Programming 1</td>
				<td>3</td>
				<td>12:00-3:15</td>
				<td>TF</td>
				<td>ITB 301</td>
			</tr>
		</table>
  </center>
</body>
<script src="popup.js"></script>
</html>
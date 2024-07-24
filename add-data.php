<?php
$con = mysqli_connect('localhost', 'root', '', 'acccount_student');
$subject = $_POST['subject'];
$description = $_POST['description'];
$unit = $_POST['unit'];
$time = $_POST['time'];
$day = $_POST['day'];
$room = $_POST['room'];

$sql = "INSERT INTO `data`(`subcode`, `description`, `unit`, `time`, `day`, `room`) VALUES ('$subcode', '$description', '$unit', '$time', '$day', '$room')";

$res = mysqli_query($con, $sql);
?>
<?php
    
    $con = mysqli_connect('localhost', 'root', '','account_student');

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $minitial = $_POST['minitial'];
    $studentno = $_POST['studentno'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $mobile = $_POST['mobile'];
    $usertype = $_POST['usertype'];
    $image = $_POST['image'];
    $civil_status = $_POST['civil_status'];
    $nationality = $_POST['nationality'];
    $newold_student = $_POST['newold_student'];
    $major_course = $_POST['major_course'];
    $sem = $_POST['sem'];


    
    $sql = "INSERT INTO `data`(`user`, `pass`, `usertype`, `fname`, `lname`, `minitial`, `image`, `studentno`, `age`, `nationality`, `gender`, `course`, `year`, `mobile`, `major_course`, `civil_status`, `newold_student`, `sem`) VALUES ('$user','$pass', '$usertype', '$fname', '$lname', '$minitial', '$image', '$studentno', '$age', '$nationality','$gender', '$course', '$year', '$mobile', '$major_course', '$civil_status', '$newold_student', '$sem')";
    
    $rs = mysqli_query($con, $sql);
    
    if($rs)
    {
        header('location:student-reg.html');
    }
    
?>
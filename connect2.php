<?php 
error_reporting(0);
$user=$_POST['name'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$faculty=$_POST['faculty'];
$exp=mysqli_connect('localhost','root','','attendance');
$query="INSERT INTO `teacherinfo`(`username`, `password`,`fname`, `faculty`) VALUES ('$user','$pass','$fname','$faculty')";
$run=mysqli_query($exp,$query);
?>
<?php 
error_reporting(0);
$roll=$_POST['Enroll'];
$name=$_POST['name'];
$course=$_POST['course'];
$sem=$_POST['Semester'];
$exp=mysqli_connect('localhost','root','','attendance');
$query="INSERT INTO `information`(`Enroll`, `name`, `course`,`Semester`) VALUES ('$roll','$name','$course','$sem')";
$run=mysqli_query($exp,$query);
?>
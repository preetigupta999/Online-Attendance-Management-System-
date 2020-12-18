<head>
<link rel="stylesheet" type="text/css" href="look.css">
<link rel="stylesheet" type="text/css" href="input.css">
<style>
	a
	{
	 color: green;
	 font-size: 20px;
	}
	.b
	{
	 background-color: #578CA9;
	 border: 4px;
	 color: white;
	 cursor: pointer;
	 padding: 16px 32px;
	 margin: 4px 2px;
	 font-size: 24px;
	 border-radius: 8px;
	 width: 100%;
	}
	body
	{
		background-image: url("https://www.softwareshell.com/wp-content/uploads/2015/06/lybrary.png"); 
		background-repeat: no-repeat;
	}
</style>
</head>
<div class="a1">
 <h2>Attendance Management System</h2>
</div>
<div>
 <?php
session_start();
echo "<a href='login.php' style='float: right;'>Logout</a>";
?>
</div><br><br>
<form method="post">
<center>
<table>
 <tr><th style="font-size: 20px;">TEACHER AREA</th></tr>
 <tr><td><input type="submit" class="b" name="login" value="Take Attendance"></td></tr>
 <tr><td><input type="submit" class="b" name="login" value="View Student Attendance"></td></tr>
</table>
</center>
</form>
<?php 
error_reporting(0);
switch($_POST['login'])
{
	case "Take Attendance": header("location: value16.php");
						break;
	case "View Student Attendance": header("location: teacherview.php");
						break;
}
?>
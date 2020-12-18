<head>
<link rel="stylesheet" type="text/css" href="look.css">
<style>
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
<body>
<div class="a1">
 <h2>Attendance Management System</h2>
</div><br>
<center>
<form method="post">
<table>
 <tr><th style="font-size: 20px;">LOGIN AS</th></tr>
 <tr><td><input type="submit" class="b" name="login" value="Admin"></td></tr>
 <tr><td><input type="submit" class="b" name="login" value="Teacher"></td></tr>
 <tr><td><input type="submit" class="b" name="login" value="Student"></td></tr>
</table>
</form>
</center>
</body>
<?php 
error_reporting(0);
switch($_POST['login'])
{
	case "Admin": header("location: adminlogin.php");
						break;
	case "Teacher": header("location: teacherlogin.php");
						break;
	case "Student": header("location: studentlogin.php");
						break;
}
?>
<head>
<link rel="stylesheet" type="text/css" href="look.css">
<link rel="stylesheet" type="text/css" href="input.css">
<style>
input[type=text]
	{
	 width: 1300px;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 6px;
     box-sizing: border-box;
	 float: center;
	}
</style>
</head>
<body>
<div class="a1">
 <h2>Attendance Management System</h2>
</div><br>
<form method="post">
<fieldset>
<legend style="color: #2A293E; text-decoration: underline; font-size: 23px; font-weight: bold;">Reset Password</legend> 
<tr><td>Username:</td></tr>
<tr><td><input type="text" name="name" placeholder="Enter username" autofocus></td></tr>
<input type="submit" name="submit" value="Submit">
</form>
</body>
<?php
$connect= mysqli_connect('localhost', 'root', '', 'attendance');
if(isset($_POST['submit']))
{
	$user=$_POST['name'];
	$check_name=mysqli_query($connect,"SELECT * FROM `teacherinfo` WHERE `username`='$user'");
	if(mysqli_num_rows($check_name) == 1)
	{
		header('location:reset1.php?name='.$user);
	}
	else
	{
		echo"wrong";
	}
}
?>

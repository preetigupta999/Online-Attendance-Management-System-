<head>
<link rel="stylesheet" type="text/css" href="look.css">
<link rel="stylesheet" type="text/css" href="input.css">
<style>
input[type=password]
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
<table>
<tr><td>Enter New Password:</td></tr>
<tr><td><input type="password" name="newpass" placeholder="Enter your new password"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="CHANGE"/></td>
</tr>
</table>
</fieldset>
</form>
<?php
$connect= mysqli_connect('localhost', 'root', '', 'attendance');
if(isset($_POST['submit']))
{
	$newpass=$_POST['newpass'];
		$name=$_GET['name'];
		
		$changepass=mysqli_query($connect,"UPDATE `teacherinfo` SET `password`='$newpass' WHERE `username`='$name'");
		if($changepass)
		{
			header('location:teacherlogin.php');
		}
		else
		{
			echo"error";
		}
}
?>
<html>

</center>
</body>
</html>
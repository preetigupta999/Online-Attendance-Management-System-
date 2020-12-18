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
	body
	{
		background-image: url('https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png');
	}
</style>
</head>
<div class="a1">
<h2>Attendance Management System</h2>
</div>
<div>
<h3><a href="login.php" id="a2">Back</a></h3><br><br><br>
</div>
<form action="studentview.php" method="post">
<fieldset>
<table>
<tr><td>Enrollment Number:</td></tr>
<tr><td><input type="text" name="Enroll" placeholder="enrollment id" required="required" autofocus/></td></tr>
<tr><td><input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</fieldset>
</form>
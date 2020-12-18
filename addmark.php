<html>
<head>
<link rel="stylesheet" type="text/css" href="look.css">
<link rel="stylesheet" type="text/css" href="input.css">
<style>
	input[type=text], input[type=email], input[type=number]
	{
	 width: 1200px;
     padding: 15px 23px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 6px;
     box-sizing: border-box;
	 float: center;
	}
    input[type=submit] 
	{
     background-color: #2A293E;
     color: white;
     padding: 12px 20px;
     border: none;
     border-radius: 8px;
     cursor: pointer;
     float: right;
	 font-size: 18px;
    }
	
	
</style>
</head>
<body>
<div class="a1">
 <h2>ATTENDANCE MANAGEMENT SYSTEM</h2>
</div>
<h3><a href="adminindex.php" id="a2">Back</a></h3><br><br><br>
<form action="" method="post">
<fieldset>
<table>
<legend style="color: #2A293E; text-decoration: underline; font-size: 23px; font-weight: bold;">Student Details</legend>
<tr><td>Enrollment No.:</td>
    <td><input type="number" name="Enroll" placeholder="Enroll" required="required" autofocus/></td>
</tr>
<tr><td>Student Name:</td>
    <td><input type="text" name="name" placeholder="name" required="required"/></td>
</tr>
<tr><td colspan="2">Course:</td></tr>
	<tr><td colspan="2"><select name="course" required="required" >
                    <option value="MCA">MCA</option>
					<option value="BCA">BCA</option>
					<option value="B.TECH">B.TECH</option>
<tr><td>Semester:</td>
    <td><input type="number" name="Semester" placeholder="sem" required="required"/></td>
</tr>

<tr>
<td colspan="2"><input type="submit" value="Submit" onclick="alert('Submitted!')"/></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
<?php include("connect1.php");?>
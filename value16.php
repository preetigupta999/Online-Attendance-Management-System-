<head>
<link rel="stylesheet" type="text/css" href="look.css">
<style>
td
{
 text-align: center;
 font-size: 17px;
}
tr:nth-child(odd)
{
 background-color: #ADD8E6;
}
th
{
 font-size: 20px;
 background-color: #578CA9;
 color: white;
}
body
{
	background-image: url('https://images.pcmac.org//Uploads/ChristianCountySD/ChristianCountySD/Sites/News/iconfor_high_attendance_day.jpg');
}
input[type=submit] 
	{
     background-color: #2A293E;
     color: white;
     padding: 10px 18px;
     border: none;
     border-radius: 8px;
     cursor: pointer;
     float: right;
	 font-size: 16px;
    }
</style>
</head>
<body>
<div class="a1">
<h2>Attendance Management System</h2>
</div>
<h3><a href="teacherindex.php" id="a2">Back</a></h3>
<form align="center" action="value20.php" method="post">
<table width="60%" align="center">
<head>
<tr>
 <th align="center"> Name</th>
 <th align="center">Enrollment</th>
 <th align="center">Attendance</th>
</tr>
<?php include("connect1.php");
error_reporting(0);
$con = mysqli_connect ('localhost', 'root','', 'attendance');
$Query = "SELECT * FROM `information`";
$select = mysqli_query($con,$Query);
if($select == true)
{
 echo"<h2 style='color: #2A293E;'>MARK ATTENDANCE</h2>";
}
for ($i=0; $i <=$row ; $i++) { 
	while( $row = mysqli_fetch_assoc( $select)){
?>
<input type='hidden' name='Enroll[<?php echo $row["Enroll"] ?>]' value='<?php echo $row["Enroll"] ?>'>
<?php echo "<tr><td>{$row['name']}</td><td>{$row['Enroll']}</td><td>"; ?>
<input type='radio' name='attend[<?php echo $row["Enroll"] ?>]' value='P'> present
<input type='radio' name='attend[<?php echo $row["Enroll"] ?>]' value='A'> Absent
<?php echo "</td></tr>\n"; 
}
}
?>
<tr><td colspan="3"><input type="submit" value="Submit" name="save"></td></tr>
</table><br><br>
</form>
</body>
</html>
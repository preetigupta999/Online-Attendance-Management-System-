<head>
<link rel="stylesheet" type="text/css" href="look.css">
<style>
table
{
	border: 1px solid black;
}
td
{
 text-align: center;
 font-size: 17px;
 font-weight: bold;
}
tr:nth-child(odd)
{
 background-color: lightgrey;
}
th
{
 font-size: 20px;
 background-color: #578CA9;
 color: black;
}
body
	{
		background-image: url("https://www.softwareshell.com/wp-content/uploads/2015/06/lybrary.png"); 
		background-repeat: no-repeat;
	}
	
</style></head>
<body>
<div class="a1">
 <h2>Attendance Management System</h2>
</div>
<h3><a href="adminindex.php" id="a2">Back</a></h3>
<?php

// compares values entered in login page form with mySQL database, and then directs either to protected page or to a failure page


$link = mysqli_connect ('localhost', 'root','', 'attendance');
   
   
	$query="SELECT * from attendanceadd";
	$run=mysqli_query($link,$query);
	echo "<table  width=60% align=center  > ";
            echo "<tr>";
                echo "<th >DATE</th>";
                echo "<th >ENROLLMENT NUMBER</th>";
                echo "<th  >ATTENDANCE</th>";
	if($run==true){
		while($data=mysqli_fetch_array($run)){

                echo "<tr>";
                echo "<td align=center>" . $data['date'] . "</td>";
                echo "<td align=center>" . $data['Enroll'] . "</td>";
                echo "<td align=center>" . $data['attend'] . "</td>";
               
                echo "</tr>";

 } 
	}
	echo "</table>";
	




session_write_close();
?></body></html>
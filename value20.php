<?php
 include ("value16.php");
 if(isset($_POST['save'])) 
 {
    //echo "ATTENDANCE SUCCESSFULLY RECORD.<BR>";
	date_default_timezone_set('Asia/Kolkata');
	$date = date('d-m-y');
	$Enroll = $_POST['Enroll'];
 	$attend = $_POST['attend'];
	foreach ( $attend as $Enroll => $attendace_status ) 
	{
		$query = "INSERT INTO `attendanceadd`(`date`, `Enroll`, `attend`) VALUES ('$date',$Enroll,'$attendace_status')";
 		if (mysqli_query($con,$query)) 
		{
 			//echo "INSERTED.<br>";
 		}
		else
		{
 			echo "fail";
 			header("location:value16.php");
 		}
 	}
 }
?>
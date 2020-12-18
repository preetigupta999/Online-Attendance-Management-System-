<?php 
$username="admin";
$password="1234";
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	if($user==$username and $pass==$password)
   {
	header("location: adminindex.php");
   }
   
   else
  {
	echo "<script>alert('Incorrect Username or Password.')</script>";
	include("adminlogin.php");
  }
}
else
{
	echo "Error";
}
?>
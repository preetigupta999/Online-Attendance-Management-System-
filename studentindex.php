<?php 
$exp1=mysqli_connect('localhost','root','','attendance');
$query1="SELECT `Enroll`FROM `information`";
$run1=mysqli_query($exp1,$query1);
if(isset($_POST['submit']))
{
	$rollid=$_POST['enroll'];
	
	if($_POST['enroll']==$query1)
   {
	while($data1=mysqli_fetch_array($run1))
    {
     echo "<tr><td>{$data1['Enroll']}</td>
               <td>{$data1['name']}</td>
			   <td>{$data1['course']}</td>
		       <td><input type='radio' name='' value='Present'>P
               <input type='radio' name='' value='Absent'>A
               </td>
		  </tr>";
    }
   }
   else
  {
	echo "<script>alert('Incorrect Enrollment No.')</script>";

  }
}
else
{
	echo "Error";
}
?>
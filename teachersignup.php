<head>
<link rel="stylesheet" type="text/css" href="look.css">
<link rel="stylesheet" type="text/css" href="input.css">
<style>   
	input[type=text] 
	{
	 width: 1300px;
     padding: 15px 23px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 6px;
     box-sizing: border-box;
	 float: center;
	}
	input[type=password]
	{
	 width: 650px;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 6px;
     box-sizing: border-box;
	 float: center;
	}
</style>
</head>
<div class="a1">
 <h2>Attendance Management System</h2>
</div>
<h3><a href="adminindex.php" id="a2">Back</a></h3>
<form action="" method="post">
<fieldset>
<legend style="color: #2A293E; text-decoration: underline; font-size: 23px; font-weight: bold;">Teacher SignUp</legend> 
<table>
<tr><td colspan="2">Username:</td></tr>
<tr><td colspan="2"><input type="text" name="name" placeholder="username" required="required" autofocus /></td></tr>
<tr><td>Password:</td>
    <td>Confirm Password:</td>
</tr>
<tr><td><input type="password" class="pass" name="pass" placeholder="password" required="required" /></td>
    <td><input type="password" class="confirmpass" name="pass" placeholder="confirm password" required="required" /></td>
</tr>
<tr><td colspan="2">Full Name:</td></tr>
<tr><td colspan="2"><input type="text" name="fname" placeholder="full name" required="required" /></td></tr>
<tr><td colspan="2">Faculty:</td></tr>
<tr><td colspan="2"><select name="faculty" required="required" >
                    <option value="HOD">HOD</option>
					<option value="Lecturer">Lecturer</option>
					<option value="Lab Assistent">Lab Assistent</option>
<tr><td colspan="2"><input type="submit" value="Submit" onclick="alert('Submitted!')"/></td></tr>
</table>
</fieldset>
</form>
<script>
	document.queryselector('.submit').onclick = function(){
		var password = document.queryselector('.pass').value,
			password = document.queryselector('.confirmpass').value;
			if(pass == ""){
				alert("Field not empty");
			}
			else if(pass != confirmpass){
				alert("Password didn't match. Please write correct password.");
			}
		return true;
	}
</script>
</body>
</html>
<?php include("connect2.php");?>
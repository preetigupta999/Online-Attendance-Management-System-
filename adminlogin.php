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
	body
	{
		background-image: url('https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png');
	}
</style>
</head>
<div class="a1">
 <h2>ATTENDANCE MANAGEMENT SYSTEM</h2>
</div>
<h3><a href="login.php" id="a2">Back</a></h3><br><br><br>
<form action="adminvalid.php" method="post">
<fieldset>
<table>
<tr><td>USERNAME:</td></tr>
<tr><td><input type="text" name="username" placeholder="username" required="required" autofocus/></td></tr>
<tr><td>PASSWORD:</td></tr>
<tr><td><input type="password" name="pass" placeholder="password" required="required"/></td></tr>
<tr><td><input type="submit" name="submit" value="Login" /></td></tr>
</table>
</fieldset>
</form>
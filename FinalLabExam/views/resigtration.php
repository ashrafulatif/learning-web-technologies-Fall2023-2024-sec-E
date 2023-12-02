<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registration</title>
	<script src="../asset/js/authVal.js"></script>
</head>
<body>
	<center>
	<form action="../controller/registrationCheck.php" method="post" onsubmit="return signVal()" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
								Name<br/><input type="text" name="name"value=""><br/> 
								Contact Number<br/><input type="phone" name="phone" value=""><br/>
								Username<br/><input type="text" name="username" value=""><br/>
								Password<br/><input type="password" name="password" value=""><br/>
								<hr>
								<input type="submit" value="Sign Up">
								<a href="login.php">Login</a>
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	</center>
</body>
</html>


		
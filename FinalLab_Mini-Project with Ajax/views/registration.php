<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registration</title>
	<script src="../asset/authValidation.js"></script>
</head>
<body>
	<center>
	<form action="../controllers/registrationCheck.php" method="post" onsubmit="return registrationVal()" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
								Id<br/><input type="text" name="id" id="id" value="" onblur="checkId()"><p id="result"></p>
								Password<br/><input type="password" name="password" id="password" value=""><br/> <p id="passLen"></p>
								Confirm Password<br/><input type="password" name="cPassword" id="cPassword" value=""><br/><p id="pass"></p>
								Name<br/><input type="text" name="name" id="name" value=""><br/>
								User Type<hr/>
								<input type="radio" name="userType" id="User" value="User"/>User
								<input type="radio" name="userType" id="Admin" value="Admin"/>Admin
								<hr/>
								<input type="submit" value="Sign Up">
								<a href="login.php">Sign In</a>
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	</center>
</body>
</html>


		
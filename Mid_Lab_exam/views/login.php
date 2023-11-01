<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<center>
	<form action="../controllers/loginCheck.php" method="post" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
					<legend><h3>LOGIN</h3></legend>
							User Id<br/>
							<input type="text" name="id" value=""><br/>
							Password<br/>
							<input type="password" name="password" value="">
							<br /><hr/>
							<input type="submit" value="Login"
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	</center>
</body>
</html>


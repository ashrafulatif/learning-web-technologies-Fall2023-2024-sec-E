<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user Home</title>
</head>
<body>
	<center>
	<h1>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h1>
		<a href="profile.html">Profile</a>
		<br/>
		<a href="change_password.html">Change Password</a>
		<br/>
		<a href="../controller/logoutcheck.php">Logout</a>
	</center>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home</title>
</head>
<body>
	<center>
	<h1>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h1>
		<a href="profile.php">Profile</a>
		<br/>
		<a href="change_password.php">Change Password</a>
		<br/>
		<a href="view_users.php">View Users</a>
		<br/>
		<a href="../controllers/logout.php">Logout</a>
	</center>
</body>
</html>


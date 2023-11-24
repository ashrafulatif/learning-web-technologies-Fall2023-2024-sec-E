<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employeer Home</title>
</head>
<body>
	<center>
	<h1>Welcome <?php  if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];  }?>!</h1>
		<a href="addJob.php"> Add Job </a>
		<br/>
        <a href="updateJob.php">Update job</a>
		<br/>
		<a href="deleteJob.php">delete job</a>
		<br/>
		<a href="../controller/logout.php">Logout</a>
	</center>
</body>
</html>

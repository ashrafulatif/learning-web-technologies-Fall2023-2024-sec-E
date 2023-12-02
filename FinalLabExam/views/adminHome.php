<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home</title>
	<script src="../asset/js/search.js"></script>
</head>
<body>
	<center>
	<h1>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h1>

		<div align="right">
			<input type="text" name="search" id="search" value=""  placeholder="Search"/>
			<input type="button" name="search1" value="Search" onclick="searchEmp()" />
		</div>
		<a href="employer.php"> Register New Employer </a>
		<br/>
        <a href="updateEmployer.php">Update employer information</a>
		<br/>
		<a href="deleteEmployer.php">delete employer information</a>
		<br/>
		<a href="../controller/logout.php">Logout</a>
	</center>
	<h5 id="h1"></h5>
</body>
</html>

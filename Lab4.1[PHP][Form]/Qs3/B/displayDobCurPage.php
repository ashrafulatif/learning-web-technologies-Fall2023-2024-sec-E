<?php
$dob=$_REQUEST["dob"];
echo "Date of Birth: ".$dob;
?>

<html>
<head>
    <title>Date of Birth</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Date of Birth</legend>
            <input type="date" name="dob" value=""><br>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
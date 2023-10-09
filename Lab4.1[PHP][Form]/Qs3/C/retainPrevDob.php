<?php
$dob=$_REQUEST["dob"];
?>

<html>
<head>
    <title>Date of Birth</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Date of Birth</legend>
            <input type="date" name="dob" value="<?php echo $dob;?>"><br>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
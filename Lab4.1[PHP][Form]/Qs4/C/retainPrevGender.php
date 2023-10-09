<?php
$gender=$_REQUEST["gender"];

?>

<html>
<head>
    <title>Gender</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>> Female
            <input type="radio" name="gender" value="Others" <?php if($gender == "Others") echo "checked"; ?>> Others
            
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
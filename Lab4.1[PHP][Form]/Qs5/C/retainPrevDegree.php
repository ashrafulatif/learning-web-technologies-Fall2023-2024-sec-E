<?php
$degree=$_REQUEST["degree"];
?>

<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Gender</legend>
            <input type="checkbox" name="degree" value="SSC" <?php if($degree=="SSC") echo "checked";?>>SSC
            <input type="checkbox" name="degree" value="HSC" <?php if($degree=="HSC") echo "checked";?>>HSC 
            <input type="checkbox" name="degree" value="BSc" <?php if($degree=="BSc") echo "checked";?>>BSc 
            <input type="checkbox" name="degree" value="MSc" <?php if($degree=="MSc") echo "checked";?>>MSc  
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
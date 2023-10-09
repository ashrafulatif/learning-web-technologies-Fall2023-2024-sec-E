<?php
$degree=$_REQUEST["degree"];
echo "Degree: ". $degree;
?>

<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Gender</legend>
            <input type="checkbox" name="degree" value="SSC">SSC
            <input type="checkbox" name="degree" value="HSC">HSC 
            <input type="checkbox" name="degree" value="BSc">BSc 
            <input type="checkbox" name="degree" value="MSc">MSc  
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
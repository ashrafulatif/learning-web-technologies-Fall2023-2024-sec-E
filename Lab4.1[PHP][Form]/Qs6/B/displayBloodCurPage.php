<?php
$blood= $_REQUEST["blood"];
echo "Blood Group is: ". $blood;
?>

<html>
<head>
    <title>Blood Group</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Blood Group</legend>
            <select name="blood">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
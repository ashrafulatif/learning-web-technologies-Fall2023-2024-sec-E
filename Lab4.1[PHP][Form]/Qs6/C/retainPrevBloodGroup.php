<?php
$blood= $_REQUEST["blood"];
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
                <option value="A+" <?php if($blood == "A+") echo "selected"; ?>>A+</option>
                <option value="B+" <?php if($blood == "A-") echo "selected"; ?>>A-</option>
                <option value="A-" <?php if($blood == "B+") echo "selected"; ?>>B+</option>
                <option value="B-" <?php if($blood == "B-") echo "selected"; ?>>B-</option>
                <option value="AB+" <?php if($blood == "AB+") echo "selected"; ?>>AB+</option>
                <option value="AB-" <?php if($blood == "AB-") echo "selected"; ?>>AB-</option>
                <option value="O+" <?php if($blood == "O+") echo "selected"; ?>>O+</option>
                <option value="O-" <?php if($blood == "O-") echo "selected"; ?>>O-</option>
            </select>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
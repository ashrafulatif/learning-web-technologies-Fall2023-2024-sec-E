<?php
$name= $_REQUEST["name"];
//echo $name;
?>

<html>
<head>
    <title>Name</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Name</legend>
            <input type="text" name="name" value="<?php echo $name;?>"><br>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>


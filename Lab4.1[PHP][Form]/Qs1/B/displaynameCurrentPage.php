<head>
    <title>Name</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Name</legend>
            <input type="text" name="name" value=""><br>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
<?php
if (isset($_REQUEST["name"])) { // isset() test the variable is set or not
    $name=$_REQUEST["name"];
    echo "Name: ".$name;
}
?>

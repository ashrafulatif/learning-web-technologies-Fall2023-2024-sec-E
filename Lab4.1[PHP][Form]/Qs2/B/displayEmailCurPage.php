<?php
$email=$_REQUEST["email"];
echo  "Email: ".$email;
?>

<html>
<head>
    <title>Email</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 25%;">
            <legend>Email</legend>
            <input type="email" name="email" value=""> <input type="button" value="i" title="hint:xyz@gmail.com"> <br>
            <hr> 
            <input type="submit" name="" value="submit">
        </fieldset>
    </form>
</body>
</html>
<?php

    require_once('../model/adminModel.php');
    $username = $_REQUEST['uname'];

    $search = getEmployeer($username);

    if ($search)
    {
        echo "Employeer Name is : ".$search['name']."<br>"; 
        echo "Employeer Phone Number is : ".$search['phone']."<br>";
        echo "Employeer Contact no is : ".$search['username']."<br>";
    }
    else{
        echo "not found";
    }

?>


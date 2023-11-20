<?php

    require_once('../model/empModel.php');
    $username = $_REQUEST['uname'];

    $search = getEmployeer($username);

    if ($search)
    {
        echo "Employeer Name is : ".$search['employerName']."<br>"; 
        echo "Employeer Company name is : ".$search['CompanyName']."<br>";
        echo "Employeer Contact no is : ".$search['ContactNo']."<br>";
        echo "Employeer Username is : ".$search['username']."<br>";
    }

?>


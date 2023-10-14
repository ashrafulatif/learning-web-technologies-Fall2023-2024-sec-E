<?php 
    $nPassword = $_REQUEST['newPassword'];
    $password = $_REQUEST['password'];
    $rTypepass = $_REQUEST['rpassword'];
    

    if($username == "" || $password == ""){
        echo "null value";
    }
    else if($nPassword==$password)
    {
        echo "current pass and new pass same. try new";
    }
    else if($nPassword1!==$rTypepass){
        echo "re type does not match";
    }
    else
    {
        echo "try again";
    }
?>
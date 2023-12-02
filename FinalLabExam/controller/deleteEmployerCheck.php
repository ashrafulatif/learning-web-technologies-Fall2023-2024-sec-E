<?php

    session_start();
    require_once ("../model/adminModel.php");

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password= $_REQUEST['password'];

    if($name==''||$username==''||$password=='')
    {
        echo "null value";
    }
    else{

        $deleteEmployer = deleteEmployer($username);

        if ($deleteEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "can not delete employer";
        }
    }
?>
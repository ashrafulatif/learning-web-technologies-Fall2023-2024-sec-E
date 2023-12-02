<?php

    session_start();
    require_once ("../model/adminModel.php");

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $phone= $_REQUEST['phone'];
    $password= $_REQUEST['password'];

    if($name==''||$username=='',$phone==''||$password=='')
    {
        echo "null value";
    }
    else{

        $addEmployer = addEmployer($name,$username,$phone,$password);

        if ($addEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "can not add employer";
        }
    }


?>
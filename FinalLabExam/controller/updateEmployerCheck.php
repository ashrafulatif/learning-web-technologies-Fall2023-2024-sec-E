<?php

    session_start();
    require_once ("../model/adminModel.php");

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $phone= $_REQUEST['phone'];
    $password= $_REQUEST['password'];

    if($name==''||$username==''||$phone==''||$password=='')
    {
        echo "null value";
    }
    else{

        $updateEmployer = updateEmployer($name,$username,$phone,$password);

        if ($updateEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "can not update employer";
        }
    }


?>
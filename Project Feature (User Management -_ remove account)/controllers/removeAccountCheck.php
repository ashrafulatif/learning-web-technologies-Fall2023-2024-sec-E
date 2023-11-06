<?php
    //session_start();
    require_once('../model/adminOperationModel.php');
    require_once('./session.php'); 

    $username= $_REQUEST['username']; // user username
    $password=$_REQUEST['password']; // admin password
    $currentAdminPass = $_SESSION['user']['password']; //admin Passwrd

    if ($password==$currentAdminPass)
    {
        $removeuser = removeAccount($username);

        if ($removeuser)
        {
            header('Location: ../views/manageAccount.php');
        }
        else 
        {
            echo "unseccessful";
        }
    }


?>
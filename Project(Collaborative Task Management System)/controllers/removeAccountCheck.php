<?php
    //session_start();
    require_once('../model/adminOperationModel.php');
    require_once('./session.php'); 

    $currentAdminPass = $_SESSION['user']['password']; //admin Passwrd from session 

    if (isset($_REQUEST['username'],$_REQUEST['password']))
    {
        $username= $_REQUEST['username']; // user username
        $password=$_REQUEST['password']; // admin password
    }
    if($password=='')
    {
        echo "Have to provide password to remove user";
    }
    else{

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
        else{
            echo "unsuccessful! <br> provide valid password";
        }
    }

?>
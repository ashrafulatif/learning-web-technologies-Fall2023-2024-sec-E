<?php
    session_start();

    require_once('../model/adminOperationModel.php');

    $username= $_REQUEST['username'];
    $userType= $_REQUEST['userType'];

    $updateUserType = updateAccountUserType($username, $userType);

    if ($updateUserType)
    {
        header('Location: ../views/manageAccount.php');
    }
    else 
    {
        echo "update unseccessful";
    }
    

?>
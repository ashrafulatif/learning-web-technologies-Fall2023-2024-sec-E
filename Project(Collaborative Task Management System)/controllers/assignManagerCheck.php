<?php
    session_start();
    require_once('../model/adminOperationModel.php');

    $managerUsername = $_REQUEST['username'];
    $projectName = $_REQUEST['projectName'];
    
   $assignMan= assignManager($projectName,$managerUsername);

    if ($assignMan)
    {
        //echo "assign manager successfully";
        header('location:../views/projectManagement.php');
    }
    else 
    {
        echo "Unsucessful attempt. please select value";
    }

?>



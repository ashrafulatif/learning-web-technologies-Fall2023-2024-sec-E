<?php

    session_start();
    require_once ("../model/empModel.php");

    $jobTitle = $_REQUEST['jobTitle'];
    $companyName = $_REQUEST['companyName'];

    if($jobTitle==''||$companyName=='')
    {
        echo "null value";
    }
    else{

        $deleteJob = deleteJob($jobTitle);

        if ($deleteJob)
        {
            header('location:../views/employerHome.php');
        }
        else 
        {
            echo "can not update job info";
        }
    }


?>
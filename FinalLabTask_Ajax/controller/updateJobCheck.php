<?php

    session_start();
    require_once ("../model/empModel.php");

    $jobTitle = $_REQUEST['jobTitle'];
    $location = $_REQUEST['location'];
    $companyName = $_REQUEST['companyName'];
    $salary= $_REQUEST['salary'];

    if($jobTitle==''||$location==''||$companyName==''||$salary=='')
    {
        echo "null value";
    }
    else{

        $updateJob = updateJob($companyName,$jobTitle,$location,$salary);

        if ($updateJob)
        {
            header('location:../views/employerHome.php');
        }
        else 
        {
            echo "can not update job info";
        }
    }


?>
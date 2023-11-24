<?php

    session_start();
    require_once ("../model/empModel.php");

    $companyName = $_REQUEST['companyName'];
    $jobTitle= $_REQUEST['jobTitle'];
    $location= $_REQUEST['location'];
    $salary= $_REQUEST['salary'];

    if($jobTitle==''||$location==''||$companyName==''||$salary=='')
    {
        echo "null value";
    }
    else{

        $addJob = addJob($companyName,$jobTitle,$location,$salary);

        if ($addJob)
        {
            header('location:../views/employerHome.php');
        }
        else 
        {
            echo "can not add employer";
        }
    }


?>
<?php

    require_once('../model/empModel.php');
    $jobTitle = $_REQUEST['job'];

    $search = getAllJob($jobTitle);

    if ($search)
    {
        echo "Company Name is : ".$search['CompanyName']."<br>";
        echo "Job Title : ".$search['jobTitle']."<br>";
        echo "Location : ".$search['location']."<br>";
        echo "Salary : ".$search['salary']."<br>";
    }
    else{
        echo "not found";
    }

?>


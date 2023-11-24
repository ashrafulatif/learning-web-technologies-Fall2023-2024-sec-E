<?php

require_once('db.php');

function getAllJob($jobTitle){
    $con = getConnection();
    $sql = "select * from jobinfo where jobTitle ='$jobTitle' ";
    $result = mysqli_query($con, $sql);

    $job = mysqli_fetch_assoc($result);

    return $job;
}

function addJob($companyName,$jobTitle,$location,$salary)
  {
      $con= getConnection();
      $sql= "INSERT INTO jobinfo (CompanyName,jobTitle,location,salary) VALUES('{$companyName}','{$jobTitle}','{$location}' , '{$salary}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

   function updateJob($companyName,$jobTitle,$location,$salary)
   {
        $con= getConnection();
        $sql= " update jobinfo set CompanyName='$companyName',jobTitle='$jobTitle',location='$location',salary='$salary' where companyName = '$companyName'";
        $result= mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
   }
   function deleteJob($jobTitle)
   {
        $con = getConnection();
        $sql = "delete from jobinfo where jobTitle = '$jobTitle'";
        $result = mysqli_query($con, $sql);

        if ($result)
        {
            return true;
        }
         else 
        {
             return false;
        }
   }

?>
<?php

require_once('db.php');

function registration($username,$password,$name,$phone)
  {
      $con= getConnection();
      $sql= "INSERT INTO admininfo (name,phone, username,password) VALUES('{$name}','{$phone}','{$username}','{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

function adminLogin($username, $password)
{
    $con = getConnection();
    $sql = "select * from adminInfo where username='{$username}'and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($cnt>0){

        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            $name = $user['name'];
            $username = $user['username'];
            setcookie('name', $name, time() + 1000, '/');
            setcookie('username', $username, time() + 1000, '/');
        }         
        return true;
    }
    else{
        return false;
    }
}

function getEmployeer($username){
    $con = getConnection();
    $sql = "select * from employerinfo where username ='$username' ";
    $result = mysqli_query($con, $sql);

    $user = mysqli_fetch_assoc($result);

    return $user;
}

function addEmployer($name, $username,$phone,$password)
  {
      $con= getConnection();
      $sql= "INSERT INTO employerInfo (name,phone,username,password) VALUES('{$name}','{$phone}', '{$username}', '{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

   function updateEmployer($name, $username,$phone,$password)
   {
        $con= getConnection();
        $sql= " update employerInfo set name ='$name',phone='$phone',username='$username',password='$password' where username = '$username'";
        $result= mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
   }
   function deleteEmployer($username)
   {
        $con = getConnection();
        $sql = "delete from employerInfo where username = '$username'";
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
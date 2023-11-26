<?php
     session_start();
     require_once('../model/adminInfoModel.php');

     $password = $_REQUEST['password'];
     $nPassword = $_REQUEST['nPassword'];    // user new password
     $rPassword = $_REQUEST['rpassword'];

     $username = $_SESSION['user']['username'];   // current session pass
     $curPass = $_SESSION['user']['password']; 
     $passCharCheck= '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`';
     
     //validation
     //check the new pass and re-type pass equal
     if (empty($password)|| empty($nPassword)|| empty($rPassword))
    {
        echo "must fill all the field";
    }
    else if ($password!=$curPass) // current pass check
    {
      echo "current password does not match";
    }
     else if ($nPassword!=$rPassword)
     {
        echo "Re-Typed password does not match";
     }
     elseif (strlen($nPassword)<5){
      echo "Password should be atleast 5 character"; 
    }
      else if(strpbrk($password, $passCharCheck)== false|| strpbrk($password, '0123456789')==false){
      echo "password should have special character and number";
       }
     else
     {
      $updatePass= updatePassword($username,$nPassword);
         if ($updatePass){
               header('location:../views/loggedDashboard.php');
            }
         else {
            header('location:../views/changePassword.php');
         }
     }
     
?>


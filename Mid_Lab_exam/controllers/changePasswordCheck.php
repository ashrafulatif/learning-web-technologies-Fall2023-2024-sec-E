<?php
     session_start();
     require_once('../model/adminInfoModel.php');

     $password = $_REQUEST['password'];
     $nPassword = $_REQUEST['nPassword']; 
     $rPassword = $_REQUEST['rpassword'];

     $id = $_SESSION['user']['id'];  
     
     //validation
     if ($nPassword!=$rPassword)
     {
        echo "Re-Typed password does not match";
     }
     elseif (strlen($nPassword)<5){
      echo "Password should be atleast 5 character"; 
    }
     else
     {
      $updatePass= updatePassword($id,$nPassword);
         if ($updatePass){
               header('location:../views/.php');
            }
         else {
            header('location:../views/profile.php');
         }
     }
     
?>
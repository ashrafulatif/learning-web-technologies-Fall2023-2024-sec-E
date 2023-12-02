<?php 
     session_start();
     require_once('../model/adminModel.php');
     $username = $_REQUEST['username'];
     $password = $_REQUEST['password'];

     if($username == "" || $password == ""){
         echo "null username/password!";   
     }else{
         
        $user = ['username'=>$username];
         $status1 = adminLogin($username, $password);
         if($status1){

             $_SESSION['username']=$user;
             $_SESSION['flag'] = "true";
             header("location:../views/adminHome.php");
         }else{
             echo "invaid user!";
         }
     }
?>
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
         $status2 = employerLogin($username, $password);
         if($status1){

             $_SESSION['username']=$user;
             $_SESSION['flag'] = "true";
             header("location:../views/adminHome.php");
         }elseif($status2){
            $_SESSION['username']=$user;
            $_SESSION["flag"] = "true";
            header("location:../views/employerHome.php");
         }else{
             echo "invaid user!";
         }
     }
?>
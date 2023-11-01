<?php 
     session_start();
     require_once('../model/userModel.php');
     $id = $_REQUEST['id'];
     $password = $_REQUEST['password'];

     if($id == "" || $password == ""){
         echo "null username/password!";   
     }else{
         
        $user = ['id'=>$id];
         $status1 = adminLogin($id, $password,$userType);
         $status2 = userLogin($id, $password, $userType);
         if($status1){

             $_SESSION['id']=$user;
             $_SESSION['flag'] = "true";
             header("location: ../views/admin_home.php");
         }elseif($status2){
            $_SESSION['id']=$user;
            $_SESSION["flag"] = "true";
            header("location: ../views/user_home.php");
         }else{
             echo "invaid user!";
         }
     }
?>
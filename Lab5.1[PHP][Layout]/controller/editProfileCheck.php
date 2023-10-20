<?php
     session_start();
     $name = $_REQUEST['Name'];
     $email = $_REQUEST['Email'];
     $gender = $_REQUEST['gender'];
     $dob = $_REQUEST['dob'];

     $user= ['Name'=>$name, 'Email'=>$email,'gender'=>$gender,'dob'=>$dob];
     $_SESSION['user']=$user;
     header('location: ../views/loggedDashboard.php');

?>
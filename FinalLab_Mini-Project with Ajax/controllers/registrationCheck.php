<?php
session_start();
require_once ("../model/userModel.php");

$id = $_REQUEST['id'];
$password= $_REQUEST['password'];
$cPassword= $_REQUEST['cPassword'];
$name = $_REQUEST['name'];
$userType=$_REQUEST['userType'];



if ($id=='' ||$password=='' || $cPassword=='' ||$name=='' ||$userType==''   ) {
    echo 'must fill all the fileds.';
} 
elseif (strlen($password) < 4 ) {
    echo 'Password should be at least 5 characters. ';
}
elseif ($password != $cPassword) {
    echo 'Password does not match.';
}
 else 
 {
   $status= registration($id,$password,$name,$userType);
   if ($status) {
    header('location:../views/login.php');
   } 
   else {
    echo 'ID Already Taken.';
   }
}

?>


<?php
session_start();
require_once ("../model/adminModel.php");

$username = $_REQUEST['username'];
$password= $_REQUEST['password'];
$phone= $_REQUEST['phone'];
$name = $_REQUEST['name'];



if ($username=='' ||$password=='' || $phone=='' ||$name=='' ) {
    echo 'must fill all the fileds.';
} 
elseif (strlen($password) < 3 ) {
    echo 'Password should be at least 5 characters. ';
}
elseif ($password != $cPassword) {
    echo 'Password does not match.';
}
 else 
 {
   $status= registration($username,$password,$name,$phone);
   if ($status) {
    header('location:../views/login.php');
   } 
   else {
    echo 'ID Already Taken.';
   }
}
?>
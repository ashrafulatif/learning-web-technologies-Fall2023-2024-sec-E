<?php 
    require_once('../model/userModel.php');
    $std =  $_POST['student'];
    $student = json_decode($std);

    $showInfo= getAllstudentInfo();
    echo json_encode($showInfo);

?>
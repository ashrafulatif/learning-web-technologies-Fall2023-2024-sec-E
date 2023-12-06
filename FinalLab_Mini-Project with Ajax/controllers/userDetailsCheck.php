<?php 
    require_once('../model/userModel.php');
    $userInfo =  $_REQUEST['userInfo'];
    $info = json_decode($userInfo);
    if($info)
    {
        $showInfo= getAllUserInfo();
        echo json_encode($showInfo);
    }
?>

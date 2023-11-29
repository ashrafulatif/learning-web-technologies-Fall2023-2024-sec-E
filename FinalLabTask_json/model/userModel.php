<?php
require_once('db.php');

function getAllstudentInfo(){
    $con = getConnection();
    $sql = "select * from userInfo";
    $result = mysqli_query($con, $sql);
    $users = [];
    
    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }
    return $users;
}

?>
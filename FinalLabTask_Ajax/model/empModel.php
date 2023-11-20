<?php

require_once('db.php');

function getEmployeer($username){
    $con = getConnection();
    $sql = "select * from employerinfo where username ='$username' ";
    $result = mysqli_query($con, $sql);

    $user = mysqli_fetch_assoc($result);

    return $user;
}
?>
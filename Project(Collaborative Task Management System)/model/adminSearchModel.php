<?php
require_once('db.php');

function searchUserInfo($username)  // return search user info
     {
        $con = getConnection();
        $sql = "select * from userInfo where username = '$username'";
        $result = mysqli_query($con, $sql);
        
        $user = mysqli_fetch_assoc($result);
        return $user;
     }

?>
<?php
    session_start();
    $username=$_REQUEST['Username'];
    $password = $_REQUEST['Password'];
    
    if($username==''||$password=='')
    {
        echo "null value! <br> please fill the credential"; 
    }
    else if($username==$_SESSION['user']['Username'] && $password== $_SESSION['user']['Password']) {

        $_SESSION['flag']=true;
        header('location: ../views/loggedDashboard.php');
    }
    else{
        echo "invalid username or password"; 
    }


?>
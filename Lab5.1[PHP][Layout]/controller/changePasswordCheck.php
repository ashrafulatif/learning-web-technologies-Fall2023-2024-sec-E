<?php 

    session_start();
    $nPassword = $_REQUEST['newPassword'];
    $password = $_REQUEST['Password'];
    $rTypepass = $_REQUEST['rPassword'];
    

    if($nPassword==$password)
    {
        echo "current pass and new pass same. try new";
    }
    else if($nPassword!=$rTypepass){
        echo "re type does not match";
    }
    else
    {
        $pass= ['Password'=>$nPassword];
        $_SESSION['Password']=$pass;
        header('location: ../views/loggedDashboard.php');
    }
?>
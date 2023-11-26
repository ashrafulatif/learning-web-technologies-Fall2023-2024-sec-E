<?php
    session_start();
    require_once('../model/adminInfoModel.php');
    
    $username=$_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if($username==''||$password=='')
    {
        echo "null value! <br> please fill the credential"; 
    }
    else {
        $user = ['username'=>$username, 'password'=>$password];
        $status = login($username,$password);
       
        if($status){
            $_SESSION['user']=$user;
            $_SESSION['flag']=true;

            //set Cookie
            setcookie('username', $username, time()+30000, '/');
            setcookie('password', $password, time()+30000, '/');

            if (isset($_REQUEST['remember']))
            {
                //setcookie('flag', 'true', time()+300, '/');
                setcookie('username', $username, time()+3000, '/');
                setcookie('password', $password, time()+3000, '/');
            }

            header('location: ../views/loggedDashboard.php');
        }
        else{
            echo "invalid username or password"; 
        }
    }
    
    
?>


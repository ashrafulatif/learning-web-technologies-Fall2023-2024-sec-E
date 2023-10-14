<?php 
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    function valUsername($username) {
        return preg_match('/^[a-zA-Z0-9._-]{2,}$/', $username);
    }
    function valPassword($password) {
        return preg_match('/^(?=.*[@#$%])[a-zA-Z0-9@#$%]{8,}$/', $password);
    }

    $ValUser= valUsername($username);
    $valPass=valPassword($password);

    if($username == "" || $password == ""){
        echo "null value";
    }
    else if($ValUser&&$valPass&&strlen($username) >= 2&&strlen($password) >= 8)
    {
        echo "valid user";
    }
    else{
        echo "invalid username/password!";
    }
?>
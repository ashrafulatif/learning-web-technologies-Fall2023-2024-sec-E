<?php
    session_start();
    $name = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $username = $_REQUEST['Username'];
    $password = $_REQUEST['Password'];
    $confirmPassword = $_REQUEST['ConfirmPassword'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    if($username == '' || $name == '' || $email == '' || $password == ''|| $confirmPassword == ''|| $gender == '' || $dob == ''){

        echo "null value! <br> please provide all the value";
    }
    else{
        $user = ['Name' => $name, 'Password' => $password, 'Username' => $username, 'Email' => $email, 'gender' => $gender, 'dob' => $dob];
        $_SESSION['user'] = $user;
        header('location: ../views/Login.php');
    }



?>
<?php
    require_once('db.php');
    //session_start();

    function signup($username,$name,$email, $password,$gender,$dob,$userType)
    {
        $con= getConnection();
        $sql= "INSERT INTO userInfo (username, name, email, password, gender, dob, userType) VALUES('$username','$name','$email', '$password','$gender','$dob','$userType')";
        $result= mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false; 
        }
     }

    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from userInfo where username='{$username}' and password='{$password}' and userType='Admin'";
        $result = mysqli_query($con, $sql);
        $cnt= mysqli_num_rows($result);
    
        if($result){
            $user = mysqli_fetch_assoc($result);
            if ($user)
            {
                return true;
            }         
        }
        else{
            return false;
        }
    }
    function getAllUser(){
        $con = getConnection();
        $sql = "select * from userInfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
    }

    function updateAdminInfo($name,$email,$gender,$dob,$username)
    {
        $con = getConnection();
        $sql = "UPDATE userInfo SET name = '$name', email = '$email', gender = '$gender', dob = '$dob' WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else {
            return false;
        }
    }

    function updatePassword ($username, $nPassword)
    {
        $con = getConnection();
        $sql = "UPDATE userInfo SET password = '$nPassword' WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if ($result)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    


?>
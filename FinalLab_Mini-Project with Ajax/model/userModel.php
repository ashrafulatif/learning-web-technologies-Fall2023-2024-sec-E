<?php
  require_once('db.php');
  function registration($id,$password, $name,$userType)
  {
      $con= getConnection();
      $sql= "INSERT INTO userinfo (id,password,name,userType) VALUES('{$id}','{$password}','{$name}' , '{$userType}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }
   function adminLogin($id, $password)
{
    $userType='Admin';
    $con = getConnection();
    $sql = "select * from userinfo where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($cnt>0){

        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            $name = $user['name'];
            $id = $user['id'];
            setcookie('name', $name, time() + 1000, '/');
            setcookie('id', $id, time() + 1000, '/');
        }         
        return true;
    }
    else{
        return false;
    }
}

function userLogin($id, $password,$userType)
{
    $userType='User';
    $con = getConnection();
    $sql = "select * from userinfo where id='{$id}' and password='{$password}' and userType='{$userType}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($cnt>0){

        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            $name = $user['name'];
            $id = $user['id'];
            setcookie('name', $name, time() + 1000, '/');
            setcookie('id', $id, time() + 1000, '/');
        }         
        return true;
    }
    else{
        return false;
    }
}
function updatePassword ($id, $nPassword)
    {
        $con = getConnection();
        $sql = "UPDATE userInfo SET password = '$nPassword' WHERE id = '$id'";
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

    function availableIdCheck($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}

function getAllUserInfo()
     {
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
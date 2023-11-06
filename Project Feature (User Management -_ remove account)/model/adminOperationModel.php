<?php
require_once('db.php');

function createProject($projectName,$projectType,$projectDetails) // push project details into db
    {
        $con= getConnection();
        $sql= "INSERT INTO adminproject (projectName, projectType, projectDetails) VALUES('$projectName','$projectType','$projectDetails')";
        $result= mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
     }

     function displayAllManagerInfo() // display all manager information
     {
        $con = getConnection();
        $sql = "select * from userInfo where userType = 'Manager'";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
     }

     function displayAllDeveloperInfo() // display all developer information
     {
        $con = getConnection();
        $sql = "select * from userInfo where userType = 'Developer'";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
     }

     function displayAllProjectInfo()  //all project info
     {
        $con = getConnection();
        $sql = "select * from adminproject";
        $result = mysqli_query($con, $sql);
        $projects = [];
        
        while($project = mysqli_fetch_assoc($result)){
            array_push($projects, $project);
        }
        return $projects;
     }

     function assignManager($projectName,$managerUsername)  //insert projet ifo and manager id into database
     {
        $con = getConnection();
        $sql = "INSERT INTO assignmanager (projectId, username) VALUES('$projectName','$managerUsername')";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
     }

     function updateAssignRole($username,$newRole) //update role for developer team member table
     {
        $con = getConnection();
        $sql = "UPDATE team_member SET role = '$newRole' WHERE username = '$username'";
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

     function displayAlluserInfo() // fetch all developer and manager info
     {
        $con = getConnection();
        $sql = "select * from userinfo where userType = 'Manager' or userType= 'Developer'";
        $result = mysqli_query($con, $sql);
        $projects = [];
        
        while($project = mysqli_fetch_assoc($result)){
            array_push($projects, $project);
        }
        return $projects;
     }

     function updateAccountUserType($username, $userType) //Update userType
     {
        $con = getConnection();
        $sql = "UPDATE userinfo SET userType= '$userType' WHERE username = '$username'";
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
     function removeAccount($username) //remove user
     {
        $con = getConnection();
        $sql = "delete from userinfo where username = '$username'";
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
<?php

    require_once('../controllers/session.php');
    require_once('../model/adminOperationModel.php');
    $userInfo = displayAllCurrentProject(); // all current project info and assign manager
    //print_r($userInfo)
?>

<html>
<head>
    <title>project Management</title>
</head>
<body>
    <header>
    <h3 style="text-align:left;">Collborative Management System </h3>
            <section style="text-align: right;">
                Logged in as <?php echo $_COOKIE['username']?> |   
                <a href="../controllers/logout.php">Logout</a>
                </section>
            </section>  
    </header>
    <main>
        <section style="width: 100%; height: auto;display: flex;">
            <div style="width: 20%; height: auto; display: flex;">
             <fieldset>
             <h4>Admin</h4>
            <hr>
            <ul>
                <li><a href="./loggedDashboard.php">Dashboard</a></li>
                <li><a href="./viewProfile.php">View Profile</a></li>
                <li><a href="./editProfile.php">Edit Profile</a></li>
                <li><a href="./manageAccount.php">User Management</a></li>
                <li><a href="./roleAssignment.php">Role Assignment</a></li>
                <li><a href="./projectManagement.php">Project Management</a></li>
                <li><a href="./changePassword.php">Change Password</a></li>
                <li><a href="../controllers/logout.php">Logout</a></li>
            </ul>  
            </fieldset>
            </div>
            <div style=" width: 80%; height: auto;display: flex;">
                <fieldset style="width: 100%">
                    <div>
                    <h3 style="text-align: center;"> project Management </h3>
                    </div>
                                    
                        <a href="./createProject.php"><b>Create Project</b></a> <br><br><hr><br>
                        <a href="./assignManager.php"><b>Assign Manager</a> </b><br><br><hr>

                    <div>
                        <h4><u> All running projects and assigned manager:</u></h4>
                        <table border ="1" width="100%"  align="center">
                            <tr>
                                <td>Project Name </td>
                                <td>Project Type</td>
                                <td>Project Details</td>
                                <td>Assigned Manager</td>
                            </tr>
                            <?php for ($i=0; $i<count($userInfo);$i++) {?>
                                    <tr>
                                        <td><?php echo $userInfo[$i]['projectName'];?> </td>
                                        <td><?php echo $userInfo[$i]['projectType'];?> </td> 
                                        <td><?php echo $userInfo[$i]['projectDetails'];?> </td>  
                                        <td><?php echo $userInfo[$i]['username'];?> </td>  
                                        </tr>
                            <?php } ?>

                                </table>
                        </div>
                </fieldset>
            </div >
        </section>        
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2023</h4>
    </footer>

</body>
</html>
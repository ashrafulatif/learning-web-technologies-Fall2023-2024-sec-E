<?php

    require_once('../controllers/session.php');
    require_once('../model/adminOperationModel.php');
    require_once('../model/adminSearchModel.php');
    
    $userInfo = displayAlluserInfo(); // all manager and develper info
    
    $searchUsername=isset($_REQUEST['search']) ? $_REQUEST['search'] : '';
    $searchUserInfo=searchUserInfo($searchUsername);
?>

<html>
<head>
    <title>User Management</title>
</head>
<body>
    <header>
    <h3 style="text-align:left;">Collaborative Management System </h3>
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
                    <h3 style="text-align: center;"> User Management </h3>
                    <h4><u> All Current User:</u></h4>
                        <div style="text-align: right">
                            <form action="" method="post">
                                <input type="text" name="search" placeholder="Search user"/>
                                <input type="submit" name="searchUser" value="Search">
                            </form>
                            
                        </div>
                    </div>
                    <br> 

                    <div>
                        <table border ="1" width="100%"  align="center">
                            <tr>
                                <td>Username</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>User Type</td>
                                <td>Option</td>
                            </tr>
                            <?php for ($i=0; $i<count($userInfo);$i++) {?>
                                    <tr>
                                        <td><?php echo $userInfo[$i]['username'];?> </td>
                                        <td><?php echo $userInfo[$i]['name'];?> </td> 
                                        <td><?php echo $userInfo[$i]['email'];?> </td>  
                                        <td><?php echo $userInfo[$i]['gender'];?> </td>  
                                        <td><?php echo $userInfo[$i]['dob'];?> </td>
                                        <td><?php echo $userInfo[$i]['userType'];?> </td>
                                        <td>
                                            <a href='./modifyAccount.php?username=<?=$userInfo[$i]['username'];?>&name=<?=$userInfo[$i]['name']?>&userType=<?=$userInfo[$i]['userType']?>'> Modify </a> |
                                            <a href='./removeAccount.php?username=<?=$userInfo[$i]['username'];?>'> Remove </a> 
                                        </td>
                                        </tr>
                            <?php } ?>

                                </table>
                            </div>
                            <br>
                            <div> 
                                <?php if (isset($_REQUEST['searchUser'])){?>

                                    <?php if (!empty($searchUserInfo)){ ?>
                                    <h4><u> Search Result:</u></h4>
                                <table border ="1" width="100%"  align="center">
                                    <tr>
                                        <td>Username</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Gender</td>
                                        <td>Date of Birth</td>
                                        <td>User Type</td>
                                        <td>Option</td>
                                    </tr>
                                    <tr>
                                            <td><?php echo $searchUserInfo['username'];?> </td>
                                            <td><?php echo $searchUserInfo['name'];?> </td> 
                                            <td><?php echo $searchUserInfo['email'];?> </td>  
                                            <td><?php echo $searchUserInfo['gender'];?> </td>  
                                            <td><?php echo $searchUserInfo['dob'];?> </td>
                                            <td><?php echo $searchUserInfo['userType'];?> </td>

                                            <td>
                                                <a href='./modifyAccount.php?username=<?=$searchUserInfo['username'];?>&name=<?=$searchUserInfo['name']?>&userType=<?=$searchUserInfo['userType']?>'> Modify </a> |
                                                <a href='./removeAccount.php?username=<?=$searchUserInfo['username'];?>'> Remove </a> 
                                            </td>
                                    </tr>
                                </table>
                                <?php } 
                                    else { echo "not found";}?>
                                <?php } ?>
                                
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


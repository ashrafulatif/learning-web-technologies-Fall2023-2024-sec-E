<?php
    require_once('../controllers/session.php');
    require_once('../model/adminOperationModel.php');

    $managerInfo= displayAllManagerInfo();// fetch all the manager info
    $projectInfo= displayAllProjectInfo(); // fetch all the project info

?>

<html>
<head>
    <title>Assign Manager</title>
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
                    <h3 style="text-align: center;"> Assign Manager </h3>
                    </div>
                    <form action="../controllers/assignManagerCheck.php" method="POST" style=" justify-content: center; align-items: center; display: flex; ">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <table>
                                        <tr>
                                            <td>
                                                Username
                                                <hr>
                                            </td>
                                            <td>
                                            <select name="username">
                                                <option value=""> Select </option>
                                                <?php for ($i = 0; $i < count($managerInfo); $i++) { ?>
                                                    <option value="<?php echo $managerInfo[$i]['username']; ?>"> <?php echo $managerInfo[$i]['username']; ?> </option>
                                                <?php } ?>
                                            </select> <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Project Name
                                                <hr>
                                            </td>
                                            <td>
                                            <select name="projectName">
                                                <option value=""> Select </option>
                                                <?php for ($i = 0; $i < count($projectInfo); $i++) { ?>
                                                    <option value="<?php echo $projectInfo[$i]['projectId']; ?>"> <?php echo $projectInfo[$i]['projectName']; ?> </option>
                                                <?php } ?>
                                            </select> <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Project Type
                                                <hr>
                                            </td>
                                            <td>
                                            <select name="projectType">
                                                <option value=""> Select</option>
                                                <?php for ($i = 0; $i < count($projectInfo); $i++) { ?>
                                                    <option value="<?php echo $projectInfo[$i]['projectType']; ?>"> <?php echo $projectInfo[$i]['projectType']; ?> </option>
                                                <?php } ?>
                                            </select><hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" value="Assign"/>
                                                <input type="reset" value="reset"/>

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                </fieldset>
            </div >
        </section>        
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2023</h4>
    </footer>

</body>
</html>
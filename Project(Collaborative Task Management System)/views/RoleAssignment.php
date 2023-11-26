<?php
    require_once('../controllers/session.php');
    require_once('../model/adminOperationModel.php');
    $developerInfo= displayAllDeveloperInfo(); 
    $developerAssignRole= displayAllDeveloperRole();

?>

<html>
<head>
    <title>Role Assignment</title>
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
                    <h3 style="text-align: center;"> Assign Role </h3>
                    </div>
                    <form action="../controllers/roleAssignmentCheck.php" method="POST" style=" justify-content: center; align-items: center; display: flex; ">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <table>
                                        <tr>
                                            <td>
                                                Username
                                                <hr>
                                            </td>
                                            <td>
                                            <select name="username">
                                                <option value=""> Select Developer </option>
                                                <?php for ($i = 0; $i < count($developerInfo); $i++) { ?>
                                                    <option value="<?php echo $developerInfo[$i]['username']; ?>"> <?php echo $developerInfo[$i]['username']; ?> </option>
                                                <?php } ?>
                                            </select> <hr>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                New Role
                                                <hr>
                                            </td>
                                            <td>
                                                 <input type="text" name="newRole" value="">
                                                <hr>
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
                            <hr>

                            <h4><u> All Assigned role:</u></h4>
                            <table border="1" width="50%" align="center" >
                                 <tr>
                                    <td>
                                        Developer Username
                                    </td>
                                    <td>
                                        Assigned Role
                                    </td>
                                 </tr>
                                 <?php for ($i =0; $i<count ($developerAssignRole);$i++) { ?>
                                 <tr>
                                    <td>
                                        <?php echo $developerAssignRole[$i]['username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $developerAssignRole[$i]['role']; ?>
                                    </td>
                                 </tr>
                                 <?php } ?>
                            </table>
                </fieldset>
            </div >
        </section>        
    </main>
    <footer>
        <h4 style="text-align: center;">Copyright©2023</h4>
    </footer>

</body>
</html>
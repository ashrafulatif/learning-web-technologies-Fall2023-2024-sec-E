<?php
    require_once('../controllers/session.php');
?>

<html>
<head>
    <title>Change Password</title>
    <script src="../Asset/js/changePasswordValidation.js"></script>
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
                    <h3 style="text-align: center;"> Change Password </h3>
                    </div>
                    <form action="../controllers/changePasswordCheck.php" method="POST" onsubmit="return changePassValidation()" style=" justify-content: center; align-items: center; display: flex; ">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <table>
                                        <tr>
                                            <td>
                                                Current password
                                            </td>
                                            <td>
                                                : <input type="password" name="password" id="password" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                New Password
                                            </td>
                                            <td>
                                                : <input type="password" name="nPassword" id="nPassword" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Confirm Password
                                            </td>
                                            <td>
                                                : <input type="password" name="rpassword" id="rPassword" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" value="Change"/>
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
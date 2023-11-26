<?php

    require_once('../controllers/session.php');
    //bring data from manageAccount through hyperlink
    $username = $_REQUEST['username'];
    $name = $_REQUEST['name'];
    $userType= $_REQUEST['userType'];
    
?>

<html>
<head>
    <title>modify Account</title>
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
            <div style="width: 20% height: auto;display: flex;">
             <fieldset>
             <h4>Admin</h4>
            <hr>
            <ul>
                <li><a href="./loggedDashboard.php">Dashboard</a></li>
                <li><a href="./viewProfile.php">View Profile</a></li>
                <li><a href="./editProfile.php">Edit Profile</a></li>
                <li><a href="./manageAccount.php">Manage Account</a></li>
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
                    <h3 style="text-align: center;"> Modify Account </h3>
                    </div>
                    <form action="../controllers/modifyAccountCheck.php" method="POST" style=" justify-content: center; align-items: center; display: flex;">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <table>
                                        <tr>
                                            <td>
                                                Username
                                            </td>
                                            <td>
                                                :<input type="text" name="username" value="<?php echo $username; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Name
                                            </td>
                                            <td>
                                                :<input type="text" name="name" value="<?php echo $name; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                UserType
                                            </td>
                                            <td>
                                                <input type="radio" name="userType" value="Manager"<?php if ($userType ==='Manager') echo 'checked';?>>Manager
                                                <input type="radio" name="userType" value="Developer"<?php if ($userType ==='Developer') echo 'checked';?> >Developer

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" value="Modify"/>
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
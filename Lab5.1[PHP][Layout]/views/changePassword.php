<?php
    require_once('../controller/session.php');
?>

<html>
<head>
    <title>Change Password</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <th colspan="2" style="text-align: left;">
            <h3>Xcompany</h3>
            <section style="text-align: right;">
                <?php echo "logged in as ".$_SESSION['user']['Username']?>|
                <a href="../controller/logout.php">Logout</a>
                </section>
        </th> 
    </tr>

    <tr>
        <td style="width: 25%;">
            <h5><u>Account</u></h5>
            <section>
                <ul>
                    <li><a href="./loggedDashboard.php">Dashboard</a></li>
                    <li><a href="./viewProfile.php">View Profile</a></li>
                    <li><a href="./editProfile.php">Edit Profile</a></li>
                    <li><a href="./changeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="./changePassword.php">Change Password</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                </ul>  
            </section>
        </td> 
        <td>
            <form action="../controller/changePasswordCheck.php" method="POST"> 
                <fieldset >
                    <legend><h4> CHANGE PASSWORD</h4></legend>
                                Current Password: <input type="Password" name="Password" value="<?php echo $_SESSION['user']['Password']?>"><hr> 
                                New Password: <input type="Password" name="newPassword" value=""><hr>
                                Retype New Password: <input type="Password" name="rPassword" value=""><hr> 
                    
                                <input type="submit" value="Submit">
                        </fieldset>
                    
                </fieldset>
        </form>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style="text-align: center;">Copyright 2017</p>
        </td>
    </tr>

</table>

</body>
</html>


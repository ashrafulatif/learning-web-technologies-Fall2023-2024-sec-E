<?php
    require_once('../controller/session.php');
?>

<html>
<head>
    <title>Dashboard</title>
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
            <h4> Welcome <?php echo $_SESSION['user']['Username']?> </h4>
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
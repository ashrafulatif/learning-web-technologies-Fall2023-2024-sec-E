<?php
    require_once('../controller/session.php');
?>

<html>
<head>
    <title>Profile</title>
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
            <fieldset >
                <legend><h4>Profile</h4></legend>
                    <section style ="width: 50%;">
                        Name: <?php echo $_SESSION['user']['Name']; ?><br><hr>
                        Email: <?php echo $_SESSION['user']['Email']; ?><br><hr>
                        Gender: <?php echo $_SESSION['user']['gender']; ?><br><hr>
                        Date of Birth: <?php echo $_SESSION['user']['dob']; ?><br><hr>
                        <a href="editProfile.php">Edit Profile</a>
                    </section>
                    
                <section style="height: 100%;width: 30px; margin-left: 100px;">
                    <img src="dp.png" alt="">
                    <a href="changeProfilePicture.php">Change</a>
                </section>
            </fieldset>
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
<?php
    require_once('../controller/session.php');
?>


<html>
<head>
    <title>Edit Profile</title>
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
            <form action=" ../controller/editProfileCheck.php" method="POST"></form>
                <fieldset >
                    <legend><h4> Edit Profile</h4></legend>
                        <section style ="width: 50%;">

                                Name: <input type="text" name="Name" value="<?php echo $_SESSION['user']['Name']; ?>"><hr>
                                Email: <input type="text" name="Email" value="<?php echo $_SESSION['user']['Email']; ?>"><hr>
                                Gender: 
                                <input type="radio" name="gender" value="Male" <?php if ($_SESSION['user']['gender'] === 'Male') echo 'checked'; ?>>Male
                                <input type="radio" name="gender" value="Female" <?php if ($_SESSION['user']['gender'] === 'Female') echo 'checked'; ?>>Female
                                <input type="radio" name="gender" value="Other" <?php if ($_SESSION['user']['gender'] === 'Other') echo 'checked'; ?>>Other
                                <hr>
                                Date of Birth: <input type="date" name="dob" value="<?php echo $_SESSION['user']['dob']; ?>"><hr>
                                <input type="submit" value="submit"/>
                        </section>
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
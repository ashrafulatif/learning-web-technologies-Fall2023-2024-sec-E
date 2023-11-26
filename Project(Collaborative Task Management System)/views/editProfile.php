<?php
  require_once('../controllers/session.php');
  require_once ('../model/adminInfoModel.php');
  $user =getAllUser(); // all user data
  $userSessionInfo = $_SESSION['user']['username'];  //currnt session username
?>

<html>
<head>
    <title>Edit Profile</title>
    <script src="../Asset/js/editProfileValidation.js"></script>
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
                    <h3 style="text-align: center;"> Profile </h3>
                    </div>
                    <form action="../controllers/editProfileCheck.php" method="post" onsubmit="return editProfile()" style=" justify-content: center; align-items: center; display: flex; ">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <section style ="width: 100%;">
                                    <?php for($i=0; $i<count($user);$i++){  // brute force approach
                                            if ($user[$i]['username']== $userSessionInfo) //will check the fetch username is equal or not the current session user
                                            {?>
                                                Name: <input type="text" name="name" id="name" value="<?php echo $user[$i]['name']; ?>"><hr>
                                                Email: <input type="text" name="email" id="email" value="<?php echo $user[$i]['email']; ?>"><hr>
                                                Gender: 
                                                <input type="radio" name="gender" id="gender" value="Male" <?php if ($user[$i]['gender'] === 'Male') echo 'checked'; ?>>Male
                                                <input type="radio" name="gender" id="gender" value="Female" <?php if ($user[$i]['gender'] === 'Female') echo 'checked'; ?>>Female
                                                <input type="radio" name="gender" id="gender" value="Other" <?php if ($user[$i]['gender'] === 'Other') echo 'checked'; ?>>Other
                                                <hr>
                                                Date of Birth: <input type="date" name="dob" id="dob" value="<?php echo $user[$i]['dob']; ?>"><hr>
                                            <?php }
                                            }?>
                                        <input type="submit" name="submit" value="Update">
                                        <input type="reset" name="reset" value="reset">
                                    </section>
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


<?php
  require_once('../controllers/session.php'); 

  require_once ('../model/adminInfoModel.php');

  $user =getAllUser(); // all user data
  $userSessionInfo = $_SESSION['user']['username'];  //currnt session username
?>

<html>
<head>
    <title>view Profile</title>
</head>
<body>
    <header>
    <h3 style="text-align:left;">Collborative Management System </h3>
            <section style="text-align: right;">
                Logged in as <?php echo $_COOKIE['username']?> |   
                <a href="../controllers/logout.php">Logout</a>
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
                    <form action="" method="POST" style=" justify-content: center; align-items: center; display: flex; ">
                                <fieldset style= " width: 50%; height: auto; display: flex;">
                                    <section style ="width: 50%;">
                                        <?php for($i=0; $i<count($user);$i++){  // brute force approach to which will check the all fetch data 
                                            if ($user[$i]['username']== $userSessionInfo) //will check the fetch username is equal or not the current session user
                                            {
                                            ?>
                                                Name: <?php echo $user[$i]['name']; ?><br><hr>
                                                Email: <?php echo $user[$i]['email']; ?><br><hr>
                                                Gender: <?php echo $user[$i]['gender']; ?><br><hr>
                                                Date of Birth: <?php echo $user[$i]['dob']; ?><br><hr>
                                                <a href="editProfile.php">Edit Profile</a>
                                           <?php }
                                        }?>
                                        
                                    </section>
                    
                                    <section style="height: 100%;width: 30px; margin-left: 100px;">
                                        <img src="../Asset/dp.png" height="100px" width="100Px">
                                        <a href="changeProfilePicture.php"> Change</a>
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


<?php
    session_start();
    if (!isset($_COOKIE['username'] ,$_COOKIE['password']))
    {
        $_COOKIE['username'] ="";
        $_COOKIE['password']="";
    }
?>
<html>
<head>
    <title>Login</title>
    <script src="../Asset/js/authValidation.js"></script>
</head>
<body>
        <header>
            <h3 style="text-align:left;">Collborative Management System </h3>
            <section style="text-align: right;">
            <a href="login.php">Login</a>|
            <a href="signup.php">Signup</a>
            </section>  
        </header>
        <main>
            <div>
                <h3 style="text-align: center;">Login</h3>
            </div>
             <form action="../controllers/loginCheck.php" method="Post" onsubmit="return loginValidation()" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
                <fieldset style="width: 25%;" >
                <table style="width: 100%;">
                    <tr>
                        <td>
                            UserName: <br>
                            <input type="text" name="username" id="username" value="<?php echo $_COOKIE['username'];?>" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password: <br>
                            <input type="password" name="password" id="password" value="<?php echo $_COOKIE['password'];?>" id="">
                        </td>
                    </tr>
                </table>
                                <input type="checkbox" name="remember" id="">Remember Me
                                <hr>
                                <input type="submit" value="Login">
                                <a href="forgetPass.php">Forgot Password?</a>
                    </fieldset>
            </form>
        </main>
        <footer>
            <h4 style="text-align: center;">Copyright©2023</h4>
        </footer>

</body>
</html>

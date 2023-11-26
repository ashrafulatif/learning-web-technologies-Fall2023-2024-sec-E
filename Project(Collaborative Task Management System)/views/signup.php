<html>
<head>
    <title>Signup</title>
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
                <h3 style="text-align: center;">Sign up to continue</h3>
            </div>
            <table width="100%">
                <tr>
                    <td>
                        <form action="../controllers/signupCheck.php" method="Post" onsubmit="return signValidation()" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
                            <fieldset style="width: 35%;" >
                                <table style="width: 100%;">
                                    <tr >
                                        <td>
                                            Name 
                                        </td>
                                        <td>
                                            : <input type="text" name="name" id="name" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            UserName
                                        </td>
                                        <td>
                                            : <input type="text" name="username" id="username" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            : <input type="text" name="email" id="email" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                        <td>
                                            :<input type="radio" name="gender" id="gender" value="Male">Male
                                            <input type="radio" name="gender" id="gender" value="Female">Female
                                            <input type="radio" name="gender" id="gender" value="Other">Other
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td>
                                            : <input type="date" name="dob" id="dob" value=""> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            : <input type="password" name="password" id="password" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Confirm Password
                                        </td>
                                        <td>
                                            : <input type="password" name="confirmPassword" id="confirmPassword" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            User Type
                                        </td>
                                        <td>
                                            :<input type="radio" name="userType" id="userType" value="Admin">Admin
                                            <input type="radio" name="userType" id="userType"  value="Manager">Manager
                                            <input type="radio" name="userType" id="userType" value="Developer">Developer
                                            <input type="radio" name="userType" id="userType" value="Client">Client
                                        </td>
                                    </tr>

                                </table>
                                <hr>
                                <section style="text-align: center;">
                                    <input type="submit" name="submit" value="Signup">
                                    <input type="reset" name ="reset" value="reset">
                                </section>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                </table>
        </main>

        <footer>
            <h4 style="text-align: center;">Copyright©2023</h4>
        </footer>


    </body>
</html>
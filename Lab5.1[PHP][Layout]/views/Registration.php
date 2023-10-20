<html>
<head>
    <title>Registration</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <th style="text-align:left;">Xcompany
        <section style="text-align: right;">
        <a href="publicHome.php">Home</a>|
        <a href="Login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        </th>  
    </tr>

    <tr>
        <td>
            <form action="../controller/registrationCheck.php" method="Post" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
                <fieldset style="width: 40%;" >
                    <legend>REGISTRATION</legend>
                    <table style="width: 100%;">
                        <tr >
                            <td>
                                Name
                            </td>
                            <td>
                                : <input type="text" name="Name" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                : <input type="text" name="Email" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                UserName
                            </td>
                            <td>
                                : <input type="text" name="Username" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                : <input type="password" name="Password" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Confirm Password
                            </td>
                            <td>
                                : <input type="password" name="ConfirmPassword" value="">
                            </td>
                        </tr>
                    </table>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender"  value="Female">Female
                        <input type="radio" name="gender" value="Other">Other
                    </fieldset>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob" value="">
                    </fieldset>
                    <hr>
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" name ="reset" value="reset">
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
        <td>
            <p style="text-align: center;">Copyright©2017</p>
        </td>
    </tr>
        
    <tr>

    </tr>

</table>

</body>
</html>
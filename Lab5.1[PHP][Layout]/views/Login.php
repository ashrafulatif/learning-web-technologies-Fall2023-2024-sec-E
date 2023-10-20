<html>
<head>
    <title>Login</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <th style="text-align:left;">Xcompany
        <section style="text-align: right;">
        <a href="publicHome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        </th>  
    </tr>

    <tr>
        <td>
            <form action="../controller/loginCheck.php" method="Post" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
                <fieldset style="width: 40%;" >
                    <legend>LOGIN</legend>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                UserName:
                            </td>
                            <td>
                                : <input type="text" name="Username" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password:
                            </td>
                            <td>
                                : <input type="password" name="Password" id="">
                            </td>
                        </tr>
                    </table>
                    <input type="checkbox" name="Remember" id="">Remember Me
                    <hr>
                    <input type="submit" value="Submit">
                    <a href="forgetPass.php">Forgot Password?</a>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
        <td>
            <p style="text-align: center;">Copyright 2017</p>
        </td>
    </tr>

</table>

</body>
</html>
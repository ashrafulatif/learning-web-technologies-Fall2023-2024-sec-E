<html>
  <head>
    <title>Add Employer</title>
    <script src="../asset/js/search.js"></script>
  </head>
  <body>
    <form action="../controller/addEmployerCheck.php" method="post" enctype="">
      <table border="1" width="40%" height="40%">
        <tr>
          <td colspan="2">
            <h3>Add Employer</h3>
            <div align="right">
                <input type="text" name="search" id="search" value=""  placeholder="Search"/>
                <input type="button" name="search1" value="Search" onclick="searchEmp()" />
            </div>
            
          </td>
        </tr>
        <tr>
          <td>Employer Name</td>
          <td><input type="text" name="name" id="name" value="" /><br /></td>
        </tr>
        <tr>
          <td>Contact no</td>
          <td>
          <input type="text" name="phone" id="phone" value="" />
          </td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" id="username" value="" /><br /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
          <input type="password" name="password" id="password" value="" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input
              type="submit"
              name="submit"
              value="submit"
              onclick=""
            />
            <input type="reset" name="reset" value="reset" />
          </td>
        </tr>
      </table>
    </form>
    <h5 id="h1"></h5>
  </body>
</html>

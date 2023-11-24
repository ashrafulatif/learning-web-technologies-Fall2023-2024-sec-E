<html>
  <head>
    <title>Delete Job</title>
    <script src="../asset/js/searchJob.js"></script>
  </head>
  <body>
    <form action="../controller/deleteJobCheck.php" method="post" enctype="">
      <table border="1" width="40%" height="40%">
        <tr>
          <td colspan="2">
            <h3>Delete Job</h3>
            <div align="right">
                <input type="text" name="search" id="search" value=""  placeholder="Search"/>
                <input type="button" name="search1" value="Search" onclick="searchEmp()" />
            </div>
            
          </td>
        </tr>
          <td>Company Name</td>
          <td>
          <input type="text" name="companyName" id="companyName" value="" />
            <br />
          </td>
        </tr>
        <tr>
          <td>Job Title</td>
          <td>
          <input type="text" name="jobTitle" id="jobTitle" value="" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input
              type="submit"
              name="submit"
              value="Delete"
              onclick=""
            />
            <input type="reset" name="reset" value="reset" />
          </td>
        </tr>
      </table>
    </form>
    <h5 id="h1"></h5>
    <h5 id="h2"></h5>
    <h5 id="h3"></h5>
    <h5 id="h4"></h5>
    <h5 id="h5"></h5>
    <h5 id="h6"></h5>
  </body>
</html>

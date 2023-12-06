function getuserInfo() {
    let userInfo = {
      name: "",
      id: "",
      userType: "",
    };
    let data = JSON.stringify(userInfo);
    console.log(data);
    let xhttp = new XMLHttpRequest();
    xhttp.open("post", "../controllers/userDetailsCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("userInfo=" + data);
  
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        let userInfos = JSON.parse(this.responseText);
        let alluserInfo = buildProjectInfoTable(userInfos); 
        console.log(userInfos);
        document.getElementById("Info").innerHTML = alluserInfo;
      }
    };
  }
  //helper function to all show project data
  function buildProjectInfoTable(userInfos) {
    let tableHTML = "<table border=1>";
    tableHTML +=
      "<tr><th>ID</th><th>Name</th><th>User Type</th></tr>";
    for (let i = 0; i < userInfos.length; i++) {
      tableHTML += `<tr>
            <td>${userInfos[i].id}</td>
            <td>${userInfos[i].name}</td>
            <td>${userInfos[i].userType}</td>
          </tr>`;
    }
    tableHTML += "</table>";
    
    return tableHTML;
  }
  
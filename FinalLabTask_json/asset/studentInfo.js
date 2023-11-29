function showStudentInfo() {
  let std = {
    id: "",
    name: "",
    cgpa: "",
    program: "",
    department: "",
  };
  let data = JSON.stringify(std);
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/studentInfoCheck.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("student=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let std = JSON.parse(this.responseText);
      // print all the value
      let studentInfo = "";
      for (let i = 0; i < std.length; i++) {
        studentInfo +=
          "ID: " +
          std[i].id +
          "<br>Name: " +
          std[i].name +
          "<br>CGPA: " +
          std[i].cgpa +
          "<br>Program: " +
          std[i].program +
          "<br>Department: " +
          std[i].department+"<br><hr>";
          
      }
      document.getElementById("info").innerHTML = studentInfo;
    }
  };
}

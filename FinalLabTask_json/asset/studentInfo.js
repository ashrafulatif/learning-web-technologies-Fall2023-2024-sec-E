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
      document.getElementById("info").innerHTML =
        "ID: " +
        std[0].id +
        "<br>Name: " +
        std[0].name +
        "<br>CGPA: " +
        std[0].cgpa +
        "<br>Program: " +
        std[0].program +
        "<br>Department: " +
        std[0].department;
    }
  };
}

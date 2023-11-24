function searchEmp() {
  let jobTitle = document.getElementById("search").value;

  if (jobTitle == "") {
    alert("write job tilte for search");
  } 
  else {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/searchJob.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("h1").innerHTML = this.responseText;
      } else {
        alert("not found");
      }
    };
    xhttp.send("job=" + jobTitle);
  }
}

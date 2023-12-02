function searchEmp() {
  let username = document.getElementById("search").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/search.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("h1").innerHTML = this.responseText;
    }
  };
  xhttp.send("uname=" + username);
}

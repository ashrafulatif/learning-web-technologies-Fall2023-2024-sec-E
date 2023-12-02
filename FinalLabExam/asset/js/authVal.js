function signVal() {
  let username = document.getElementById("username").value;
  let name = document.getElementById("name").value;
  let phone = document.getElementById("phone").value;
  let password = document.getElementById("password").value;

  if (username == "" || name == "" || phone == "" || password == "") {
    alert("empty value!<br> please provide valid value");
    return false;
  }
}
function loginVal() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username == "" || password == "") {
    alert("empty value!<br> please provide valid username or password");
    return false;
  }
}

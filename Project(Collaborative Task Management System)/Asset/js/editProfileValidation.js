function editProfile() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let gender = document.querySelector('input[name="gender"]:checked');
  let dob = document.getElementById("dob").value;

  let fAlph = name.charCodeAt(0); //first alphabet username

  if (name == "" || email == "" || gender == null || dob == "") {
    alert("Null value! Have to provide all the value");
    return false;
  }
  //username validation
  else if (name.length < 3) {
    alert("name should be atleast 3 character");
    return false;
  } else if (!(fAlph >= 65 && fAlph <= 90) && !(fAlph <= 122 && fAlph >= 97)) {
    alert(" Name must start with latter");
    return false;
  } else if (!email.includes("@") || !email.includes(".com")) {
    alert("email address must be valid");
    return false;
  }
}

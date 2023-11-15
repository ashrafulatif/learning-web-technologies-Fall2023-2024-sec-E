function personProfile() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let male = document.getElementById("Male").checked;
  let female = document.getElementById("Female").checked;
  let others = document.getElementById("Others").checked;
  let dob = document.getElementById("dob").value;
  let ssc = document.getElementById("SSC").checked;
  let hsc = document.getElementById("HSC").checked;
  let bsc = document.getElementById("BSc").checked;
  let bldGroup = document.getElementById("blood").value;
  let pic = document.getElementById("picture");

  let aph = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let fAlph = name.charCodeAt(0); //first alphabet of name

  //retrive dob from form
  let dobArray = dob.split(" ");
  let year = parseInt(dobArray[0], 10);
  let day = parseInt(dobArray[1], 10);
  let month = parseInt(dobArray[2], 10);

  let pic1 = pic.files[0];

  if (name == "" || email == "" || dob == "" || bldGroup == "") {
    alert("empty Field!");
  } else if (name.length < 2) {
    alert("must be at least two letter");
  } else if (!(fAlph >= 65 && fAlph <= 90) && !(fAlph <= 122 && fAlph >= 97)) {
    alert("must start with latter");
  } else if (!email.includes("@") || !email.includes(".com")) {
    alert("email address must be valid");
  } else if (
    day < 1 ||
    day > 31 ||
    month < 1 ||
    month > 12 ||
    year < 1900 ||
    year > 2016
  ) {
    alert(" date of birth must be in the range");
  } else if (!pic1) {
    alert("have to upload picture");
  } else {
    //name
    document.getElementById("h1").innerHTML = "Name: " + name;
    //email
    document.getElementById("h2").innerHTML ="Email: "+ email;
    //Gender
    if (male == true) {
      document.getElementById("h3").innerHTML = "Gender: "+"Male";
    } else if (female == true) {
      document.getElementById("h3").innerHTML = "Gender: "+"Female";
    } else if (others == true) {
      document.getElementById("h3").innerHTML = "Gender: "+"Others";
    }
    document.getElementById("h4").innerHTML= "Date of Birth: " +dob;
    document.getElementById("h5").innerHTML= "Blood Group: "+bldGroup;
    //Degree
    if (ssc == true) {
      document.getElementById("h6").innerHTML = "Degree: "+"SSC";
    } else if (hsc == true) {
      document.getElementById("h6").innerHTML = "Degree: "+"HSC";
    } else if (bsc == true) {
      document.getElementById("h6").innerHTML ="Degree :"+ "BSc";
    }
    //profile picture
    document.getElementById("h7").src = URL.createObjectURL(pic1);
  }
}

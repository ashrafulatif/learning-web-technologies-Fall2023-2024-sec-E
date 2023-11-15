function dateOfbirth() {
    
    let dob = document.getElementById("dob").value;
    if (dob=='') {
        alert ("filed is empty");
    }

    let dobArray = dob.split(" ");
    let year = parseInt(dobArray[0], 10);
    let day = parseInt(dobArray[1], 10);
    let month = parseInt(dobArray[2], 10);

        if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016)
        {
            alert("must be in the range");
        }
        else{
            document.getElementById("h1").innerHTML= dob;
        }


}
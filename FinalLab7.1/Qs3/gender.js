function displayGender() {
    
    let  male = document.getElementById('Male').checked;
    let  female = document.getElementById('Female').checked;
    let  others = document.getElementById('Others').checked;

    if (male==true)
    {
        document.getElementById("h1").innerHTML= "Male";
    }
    else if (female==true)
    {
        document.getElementById("h1").innerHTML= "Female"
    }
    else if(others==true)
    {
        document.getElementById("h1").innerHTML= "Others";
    }
    else
    {
        alert("filed is empty");
    }

}
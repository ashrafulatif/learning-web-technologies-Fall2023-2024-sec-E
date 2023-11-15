function displayEmail()
{
    let email = document.getElementById('email').value;
    
    if (email=='')
    {
        alert("email field empty");
    }
    else if (!email.includes("@") || !email.includes(".com"))
    {
        alert ("email address must be valid");
    }
    else 
    {
        document.getElementById("h1").innerHTML= email;
    }
}
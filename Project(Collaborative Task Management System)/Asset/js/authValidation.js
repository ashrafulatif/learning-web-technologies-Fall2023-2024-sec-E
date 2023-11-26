//signUp validation
function signValidation()
{
    let name = document.getElementById('name').value;
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let gender = document.getElementById('gender').value;
    let dob = document.getElementById('dob').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let userType = document.getElementById('userType').value;

    let fAlph= username.charCodeAt(0); //first alphabet username


    if (name==''||username==''||email==''||gender==''||dob==''||password==''||confirmPassword==''||userType=='')
    {
        alert("Null value! Have to provide all the value for crate an account" );
        return false;
    }
    else if (password!=confirmPassword)
    {
        alert("Password does not match");
        return false;
    }
    //username validation
    else if (username.length<5)
    {
        alert("username should be atleast 5 character");
        return false;
    }
    else if(!(fAlph>=65&&fAlph<=90)&&!(fAlph<=122 &&fAlph>=97))
    {
        alert(" Username must start with latter");
        return false;
    }
    else if (!email.includes("@") || !email.includes(".com"))
    {
        alert ("email address must be valid");
        return false;
    }
    //password validation
    else if (password.length<5)
    {
        alert("password  should be atleast 5 character");
        return false;
    }

}
//login validation
function loginValidation()
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if(username==''||password=='')
    {
        alert ("empty field !");
        return false;
    }
}

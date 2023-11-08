function userProfile()
{
    let id= document.getElementById('userId').value;
    let pic= document.getElementById('picture');
    let pic1 = pic.files[0];
    if (id==''|| id<0)
    {
        alert("user id must be filled and positive number");
    }
    else if (!pic1)
    {
        alert("have to upload picture");
    }
    else{
        document.getElementById('h1').innerHTML= id;
        document.getElementById('h2').src = URL.createObjectURL(pic1);

    }

}
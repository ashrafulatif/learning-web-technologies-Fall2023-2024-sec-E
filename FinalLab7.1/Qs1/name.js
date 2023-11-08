function displayName ()
{
    let name = document.getElementById('name').value;
    let aph = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let fAlph= name.charCodeAt(0); //first alphabet of name

    if (name=='')
    {
        alert('empty name!');
    }
    else if (name.length < 2)
    {
        alert('must be at least two letter');
    }
    else if(!(fAlph>=65&&fAlph<=90)&&!(fAlph<=122 &&fAlph>=97))
    {
        alert("must start with latter");
    }
    else{
        document.getElementById('h1').innerHTML= "Name: "+name
    }
}

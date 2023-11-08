function bloodGroup() {
    
    let bldGroup= document.getElementById('blood').value;

    if (bldGroup=='')
    {
        alert("blood group must be selected");
    }
    else{
        document.getElementById("h1").innerHTML= bldGroup;
    }
}
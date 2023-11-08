function degree() {
    
    let ssc = document.getElementById('SSC').checked;
    let hsc = document.getElementById('HSC').checked;
    let bsc = document.getElementById('BSc').checked;

    if(ssc==true)
    {
        document.getElementById("h1").innerHTML= "SSC";
    }
    else if(hsc==true)
    {
        document.getElementById("h1").innerHTML= "HSC";
    }
    else if(bsc==true)
    {
        document.getElementById("h1").innerHTML= "BSc";
    }
    else{

        alert("filed is empty");
    }
}
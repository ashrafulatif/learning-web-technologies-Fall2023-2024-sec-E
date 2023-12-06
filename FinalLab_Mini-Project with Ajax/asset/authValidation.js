function checkId() 
{
    let id = document.getElementById('id').value;

    let xhttp = new XMLHttpRequest();

    xhttp.open('post', '../Controller/idCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    };
    xhttp.send('id=' +id);
}

    function registrationVal() {
        let id = document.getElementById('id').value;
        let name = document.getElementById('name').value;
        let userType = document.querySelector('input[name="userType"]').value;
        let password = document.getElementById('password').value;
        let cPassword = document.getElementById('cPassword').value;
    
        if(name==''||id==''||userType==''||password==''||cPassword==''){
            alert("empty field");
            return false
        }
        else if(password!=cPassword)
        {
            document.getElementById('pass').innerHTML = this.responseText;
            return false;
        }
        else if(password.length>4)
        {
            alert("passoword length must be atleast 4");
            document.getElementById('passLen').innerHTML = this.responseText;
            return false;
        }
        return true;
    }

    function loginCheck(){

        let id = document.getElementById('id').value;
        let password = document.getElementById('password').value;
    
        if(id==''||password=='')
        {
            document.getElementById('h1').innerHTML = "empty field";
            return false;
        }
        return true;
}
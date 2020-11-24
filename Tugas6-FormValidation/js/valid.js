function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var nama = document.getElementById("name").value;
    var gender = document.getElementsByName("gender").value;
    
    if (email!="" && password!="" && nama!=""){
        alert ("trimakasi sudah mengisi data dengan benar");
    }
    else{
        alert("silahkan lengkapi data");
        return false;
    }
 }

 function validasi_login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if (email!="" && password!=""){
        alert("data diterima");
        return true;
    }
    else{
        alert("silahkan lengkapi data");
        return false;
    }
 }
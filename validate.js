function validate() {
    // alert("FIle import");
    var uname = document.getElementById("uname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var psw = document.getElementById("psw").value;
    var psw_r = document.getElementById("psw_r").value;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (uname == 0 || email == "" || phone == "" || psw == "" || psw_r == "") {
        alert("some feilds are blank!");
        return false;
    } else if (psw != psw_r) {
        alert("password are not matching!");
        return false;
    } else if (phone.length != 10) {
        alert("invalid password");
        return false;
    } else if (reg.test(email) !== false) {
        alert("invalid email!");
        return false;
    } else {
        alert("sucsessfull");
        return true;
    }
}
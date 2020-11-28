function LogIn() {
    var lg = document.getElementsByTagName("input")[0].value;
    var pswd = document.getElementsByTagName("input")[1].value;
    if (lg == "admin" && pswd == "admin") {
        window.location.href = "main.php";
        document.getElementsByTagName("input")[0].value = "";
        document.getElementsByTagName("input")[1].value = "";
    } else if (lg == "" && pswd == "") {} else {
        alert("Check entered login/password and try again");
    }
}
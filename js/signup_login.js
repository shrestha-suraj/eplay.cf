var preservedSignup=document.getElementById("signup_div").innerHTML;
var preservedLogin=document.getElementById("login_div").innerHTML;

function flipLogin(){
    document.getElementById("signup_div").innerHTML="";
    document.getElementById("login_div").innerHTML="";
    document.getElementById("login_div").innerHTML=preservedLogin;
    var flipController=document.getElementById("flip_form");
    flipController.style.transform="rotateY(180deg)";
}
function flipSignup(){
    document.getElementById("signup_div").innerHTML="";
    document.getElementById("login_div").innerHTML="";
    var flipController=document.getElementById("flip_form");
    flipController.style.transform="rotateY(0deg)";
    document.getElementById("signup_div").innerHTML=preservedSignup;
}
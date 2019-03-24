var signForm=document.getElementById("form_div").innerHTML;
function loadLogin(){
    var signupInputs=document.getElementsByClassName("signup_input");
    var signupButton=document.getElementsByClassName("signup_button");
    var decider=signupInputs[0].innerHTML;
    if (decider==="Sign-Up"){
        signupInputs[0].innerHTML="Login";
        signupInputs[1].remove();
        signupInputs[1].remove();
        signupInputs[2].placeholder="Password";
        signupButton[0].value="Login";
        signupInputs[3].innerHTML="New User: <button id='switch_button' onclick='loadLogin()' style='background: transparent;border: 0;color:darkblue;text-decoration: underline;font-size: 25px;'>Sign Up</button>";
    }
    else{
        console.log("Else is running properly");
        var sign_again=document.getElementById("form_div");
        sign_again.innerHTML=signForm;
        // signupInputs[0].innerHTML="Sign-Up";
        // signupInputs[1].innerHTML="<input class='signup_input' type='text' name='user_name' placeholder='Name'/>";
        // signupInputs[2].innerHTML="<input class='signup_input' type='text' name='user_id' placeholder='New Username'/>";
        // signupInputs[3].innerHTML="<input class='signup_input' type='text' name='user_email' placeholder='Email' />";
        // signupInputs[4].innerHTML="<input class='signup_input' type='password' name='user_password' placeholder='New Password' />" ;             
        // signupButton[0].value="Sign Up";
        // signupInputs[5].innerHTML="Already a user:<button id='switch_button' onclick='loadLogin()' style='background: transparent;border: 0;color:darkblue;text-decoration: underline;font-size: 25px;'>Login</button>";
    }
    


}
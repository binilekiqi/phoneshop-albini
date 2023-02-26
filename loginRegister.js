
function RememberMe(){
    document.getElementById("bt1").value="✓";
}
var button=document.getElementById("loginBtn");

var passwordMsg=document.getElementById("passwordMsg");

var usernameMsg=document.getElementById("usernameMsg");

var usernameRegex = /^(?:[a-zA-Z\d][a-zA-Z\d_!.-]{5,15})/;

var email1Regex= /^(?:[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-z]{1,3})$/ ;

var passwordRegex = /^[A-Z].*(?=.{8,20})(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&+=]).*/;


button.addEventListener("click", function(event){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if(username == "" || username==null){
        usernameMsg.innerText="Fill Username or Email";
        event.preventDefault();
    } else  if(usernameRegex.test(username) ||email1Regex.test(username)){
            usernameMsg.innerText="";
        }else{
            usernameMsg.innerText="Username or Email not correct";
            event.preventDefault();
        }
    
    if(password == "" || password==null){
        passwordMsg.innerText="Fill password";
        event.preventDefault();
    } else {
        if(passwordRegex.test(password)){
            passwordMsg.innerText="";
        }else{
            passwordMsg.innerText="Your password is incorrect";
            event.preventDefault();
        }
    }
    
})

//var register=document.getElementById("registerBtn");
//var emailRegex =/^(?:[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-z]{1,3})$/;
//var emailMsg=document.getElementById("emailMsg");
//
//register.addEventListener("click" , function(event){
//    var email=document.getElementById("email").value;
//
//    if(email == "" || email==null){
//        emailMsg.innerText="Fill Email";
//        event.preventDefault();
//    } else {
//        if(emailRegex.test(email)){
//            emailMsg.innerText="";
//        }else{
//            emailMsg.innerText="Email not correct";
//            event.preventDefault();
//        }
//    }
//
//})
//


var phoneNumberRegex=/^\+[1-9]{1}[0-9]{1,14}$/;

var signUpButton=document.getElementById("signUpButton");

var username1Msg=document.getElementById("username1Msg");

var password1Msg=document.getElementById("password1Msg");

var password2Msg=document.getElementById("password2Msg");

var phoneNumberMsg=document.getElementById("phoneNumberMsg");

signUpButton.addEventListener("click", function(event){
    var username1=document.getElementById("username1").value;

    var password1=document.getElementById("password1").value;

    var password2=document.getElementById("password2").value;

    var phoneNumber=document.getElementById("phoneNumber").value;

    if(username1=="" || username1==null){
        username1Msg.innerText="Fill Username";
        event.preventDefault();
    } else if(usernameRegex.test(username1)){
        username1Msg.innerText="";
        } else{
            username1Msg.innerText="Username not correct";
            event.preventDefault();
        }
    
    
    if(password1=="" || password1==null){
        password1Msg.innerText="Fill password";
        event.preventDefault();
    } else if(passwordRegex.test(password1)){
        password1Msg.innerText="";
    } else {
        password1Msg.innerText="The password policy is: • At least 8 chars • Contains at least one digit • Starts with upper case • Contains at least (@#$%^ etc) • Does not contain space, tab.";
        event.preventDefault();
    }

    if(password2=="" || password2==null){
        password2Msg.innerText="Fill password";
        event.preventDefault();
    } else if(password2==password1){
        password2Msg.innerText="";
    } else{
        password2Msg.innerText="The passwords does not match."
        event.preventDefault();
    }
    
    if(phoneNumber=="" || phoneNumber==null){
        phoneNumberMsg.innerText="Fill Phone number";
        event.preventDefault();
    } else if(phoneNumberRegex.test(phoneNumber)){
        phoneNumberMsg.innerText="";
    } else {
        phoneNumberMsg.innerText="Incorrect Phone Number";
        event.preventDefault();
    }
})



document.addEventListener("DOMContentLoaded", ()=>{
    const registerForm =document.getElementById("register");
    const signUpForm =document.getElementById("signUp");


    document.querySelector("#registerBtn").addEventListener("click", e => {
        var email3=document.getElementById("email").value;
        if(email3 == "" || email3==null){
            emailMsg.innerText="Fill Email";
            e.preventDefault();
        } else if(emailRegex.test(email3)){
                e.preventDefault();
                registerForm.classList.add("forma--hidden");
                signUpForm.classList.remove("forma--hidden");
            }
            else{
                emailMsg.innerText="Email not correct";
                e.preventDefault();
            }
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        registerForm.classList.remove("forma--hidden");
        signUpForm.classList.add("forma--hidden");
    });
});



  let registerbtn= document.getElementById("registerBtn");
  let imella = document.getElementById("email");

    let imella1 = document.getElementById("email1");

  registerbtn.addEventListener("click", ()=>{
        imella1.value=imella.value;
});


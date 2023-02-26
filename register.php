<?php include_once 'controller/ReigsterController.php'; 
        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MobilShopLipjani - Regjistrohu </title>
        <link rel="stylesheet" href="Login.css">
        <link rel="shortcut icon" href="191.png" />

    </head>

    <body>
        <header>
            <ul>
                <ul class="main-menu">
                    <li><a href="index.html"  title="kliko ketu per tu kthyer ne faqen kryesore">Ballina</a></li>
                    <li><a href="index.html" >Rreth nesh</a></li>
                    <li><a href="index.html" >Kontakto</a></li>
                    
                  </ul>
                  <ul class="right-menu">
                    <li>
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                      </li>
            </ul>
        </header>
        <style>
            .main1{
               
                width: 25%;
                height: auto;
                margin-top: 1%;
                
                margin-left:40%;
        }
        .forma{
            margin-left: 2%;
         margin-top: 0%;
        }

        </style>
        <div class="main1" id="login">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="forma" id="signUp">
                 <a class="color">Name*</a> <br>
                <input type="text" name="name" id="name" placeholder="Name" class=""> <br>
                <label style="color: red;" id="nameMsg"></label><br>
              

                <a class="color">Surname*</a> <br>
                <input type="text" name="surname" id="surname" placeholder="Surname" class=""> <br>
                <label style="color: red;" id="surnameMsg"></label><br>
              

                <a class="color">Email*</a> <br>
                <input type="text" name="email1" id="email1"  class="" placeholder="email"><br>
                <label style="color: red;" id="emailMsg"></label><br>


                <a class="color">Username*</a> <br>
                <input type="text"  id="username1" placeholder="Username" name="username1" class=""> <br>
                <label style="color: red;" id="username1Msg"></label><br> 
                
                <a class="color">Password*</a> <br>
                <input type="password" name="password1" id="password1" placeholder="Your password" class="">
                <br>
                <label style="color: red;" id="password1Msg"></label>
                <br>
                <a class="color">Re-write password*</a> <br>
                <input type="password" name="password2" id="password2" placeholder="Re-write password" name="password" class="">
                <br>
                <label style="color: red;" id="password2Msg"></label>
                <br>
                <a class="color">Phone number*</a> <br>
                <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Your phone number" class="">
                <br>
                <label style="color: red;" id="phoneNumberMsg"></label><br> 
                <br>
                <input type="submit" value="REGISTER" class="id4" id="signUpButton" name="signUpButton" style="height: 7vh;"> <br>

                <p class="form__text">
                    <a class="form__link" href="./" id="linkLogin">Go Back</a>
                </p>
               
            </form>

</div>


        
     
<script >

var usernameRegex = /^(?:[a-zA-Z\d][a-zA-Z\d_!.-]{5,15})/;

var email1Regex= /^(?:[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-z]{1,3})$/ ;

var passwordRegex = /^[A-Z].*(?=.{8,20})(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&+=]).*/;

var phoneNumberRegex=/^\+[1-9]{1}[0-9]{1,14}$/;

var signUpButton=document.getElementById("signUpButton");

var username1Msg=document.getElementById("username1Msg");

var password1Msg=document.getElementById("password1Msg");

var password2Msg=document.getElementById("password2Msg");

var nameMsg=document.getElementById("nameMsg");

var surnameMsg=document.getElementById("surnameMsg");

var emailMsg=document.getElementById("emailMsg");


var phoneNumberMsg=document.getElementById("phoneNumberMsg");

signUpButton.addEventListener("click", function(event){
    var name=document.getElementById("name").value;

    var surname=document.getElementById("surname").value;

    var email1=document.getElementById("email1").value;

    var username1=document.getElementById("username1").value;

    var password1=document.getElementById("password1").value;

    var password2=document.getElementById("password2").value;

    var phoneNumber=document.getElementById("phoneNumber").value;

    if(name=="" || name==null){
        nameMsg.innerText="Fill Name";
        event.preventDefault();
    }else if(name!="" || name !=null){
        nameMsg.innerText="";
    }

    if(surname=="" || surname==null){
        surnameMsg.innerText="Fill Username";
        event.preventDefault();
    }else if(surname!="" || surname !=null){
        surnameMsg.innerText="";
    }

    if(email1=="" || email1==null){
        emailMsg.innerText="Fill Email";
        event.preventDefault();
    }else if(email1!="" || email1 !=null){
        emailMsg.innerText="";
    }


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

</script>
    </body>
    
</html>
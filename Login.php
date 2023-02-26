<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MobilShopLipjani - KYÇU</title>
        <link href="Login.css" rel="stylesheet" href="style.css">
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
        

        <form action="loginValidate.php" method="post">
        <div class="box">
            <div class="from">
                <h2 class="LoginButton" >Login</h2>
                <div class="inputBox">
                <input type="text" name="username" id="username "required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="register.php">SignUp </a>
            </div>
                 <input class="id2" type="submit" value="LOG IN" name="loginBtn" id="loginBtn">
            </div>
            </form>
        </div>
    <?php require_once 'loginValidate.php'; ?>
    <script src="loginRegister.js"></script>
    </body>

</html>
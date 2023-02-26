<?php

session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dashboard.php"><Button>Dashboard</Button></a>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br> <br> 
        <input type="text" name="surname" placeholder="surname..."><br> <br> 
        <input type="text" name="email" placeholder="email..."><br> <br> 
        <input type="text" name="username" placeholder="username..."><br> <br> 
        <input type="text" name="password" placeholder="password..."><br> <br> 
        <input type="tel" name="phonenumber" placeholder="phonenumber..."><br> <br> 
        <input type="text" name="role" placeholder="role..."><br> <br> 
        <input type="submit" name="registerBtn" placeholder="register"><br> <br> 
    </form>

   <?php include_once '../controller/registerController.php'; ?>
</body>
</html>
<?php
}
?>
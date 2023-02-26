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
<a href="../index.php"> <h3>Home</h3></a>
    <a href="databaseUsers.php"> <h3>Users</h3></a>
    <a href="../dashboardProducts.php"> <h3>Products</h3></a>
    
</body>
</html>
<?php
}
?>
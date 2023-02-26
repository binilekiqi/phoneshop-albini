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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" placeholder="ProductName" name="ProductName">
        <input type="text" placeholder="ProductPrice" name="ProductPrice">
        <input type="text" placeholder="ProductDescription" name="ProductDescription">
        <input type="text" placeholder="ProductImage" name="ProductImage">
        <input type="submit" value="Insert Product" name="insertProduct">
    </form>

    <h3><a href="dashboard.php">DASHBOARD</a></h3>
    <?php include_once '../controller/productController.php'?>
</body>
</html>
<?php 
} 
?>
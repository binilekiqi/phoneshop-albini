<?php


session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){

    include_once '../productRepository.php';

    $productID=$_GET['id'];

    $productRepository= new ProductRepository();

    $productRepository->deleteProduct($productID);

    header("location:../dashboardProducts.php");
}
?>
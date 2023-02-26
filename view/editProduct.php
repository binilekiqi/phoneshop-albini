<?php 


session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../home.php");
}if($_SESSION['role']=='user')  {
    header("location:../home.php");
}  else if($_SESSION['role']=='admin'){

include_once '../productRepository.php';
    $productID=$_GET['id'];

    $productRepository=new ProductRepository();
    $product=$productRepository->getProductByID($productID);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form div{
            margin-top: 5%;
        }
    </style>
</head>
<body>
    <form action="" method="post" style=" display:flex; flex-direction:column; width:15%;">
      <div> Product ID <input type="text" name="ProductID" value="<?=$product['ProductID'] ?>" readonly> </div>
      <div> Product Name <input type="text" name="ProductName" value="<?=$product['ProductName'] ?>"></div>
      <div> Product Price <input type="text" name="ProductPrice" value="<?=$product['ProductPrice'] ?>"> </div>
      <div> Product Description <input type="text" name="ProductDescription" value="<?=$product['ProductDescription'] ?>"> </div>
      <div> Product Image <input type="text" name="ProductImage" value="<?=$product['ProductImage'] ?>"> </div>
      <input  style="width: 75%;" type="submit" name="updateButton" value="save">
      
    </form>
</body>
</html>

<?php
    if(isset($_POST['updateButton'])){
        $productID=$product['ProductID'];
        $productName=$_POST['ProductName'];
        $productPrice=$_POST['ProductPrice'];
        $productDescription=$_POST['ProductDescription'];
        $productImage=$_POST['ProductImage'];
      

        $productRepository->updateProduct($productID,$productName,$productPrice,$productDescription,$productImage);
        header("location:../dashboardProducts.php");
    }
}
?>
<?php 
    include_once '../productRepository.php';
    include_once '../model/product.php';

    if(isset($_POST['insertProduct'])){
        if(empty($_POST['ProductName']) || empty($_POST['ProductPrice']) || empty($_POST['ProductDescription']) || empty($_POST['ProductImage']) ){
            echo "<script> alert('Fill all fields');</script>";
        }else
        {
            $name=$_POST['ProductName'];
            $price=$_POST['ProductPrice'];
            $description=$_POST['ProductDescription'];
            $image=$_POST['ProductImage'];
            $id=rand(100,900);
        }

        $product=new Product($id,$name, $price, $description, $image);
        $productRepository= new ProductRepository();
        $productRepository -> insertProduct($product);

    }
?>
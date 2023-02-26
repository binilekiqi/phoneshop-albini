<?php 
include_once 'database/databaseConnection.php';
include_once 'model/product.php';
    class ProductRepository{
        private $connection;

        function __construct()
        {
            $conn=new DatabaseConnection;
            $this->connection=$conn->startConnection();
        }

        function insertProduct($product){
            $conn=$this->connection;

            
            $productID=$product->getProductID();
            $name=$product->getProductName();
            $price=$product->getProductPrice();
            $description=$product->getProductDescription();
            $image=$product->getProductImage();
        

            $sql="INSERT INTO products(ProductID,ProductName,ProductPrice,ProductDescription,ProductImage) values (?, ?,?, ?, ?)";

            $statement=$conn->prepare($sql);
            $statement->execute([$productID,$name,$price,$description,$image]);

            echo "<script> alert('product has been inserted successfuly!'); </script>";
        }

        function getProductByID($id){
            $conn=$this->connection;

            $sql="SELECT * FROM products WHERE ProductID ='$id'";
            $statement=$conn->query($sql);
            $product=$statement->fetch();
            return $product;
        }

        function updateProduct($productID,$productName,$productPrice,$productDescription,$productImage){
            $conn=$this->connection;
    
            $sql="UPDATE products SET ProductName=?, ProductPrice=?,ProductDescription=?, ProductImage=? WHERE productID=?";
    
            $statement=$conn->prepare($sql);
            $statement->execute([$productName,$productPrice,$productDescription,$productImage,$productID]);
    
            echo "<script> alert ('update was succesful');</script>";
        }

        function getAllProducts(){
            $conn= $this->connection;
    
            $sql="SELECT * FROM products";
    
            
            $statement = $conn->query($sql);
            $products = $statement->fetchAll();
    
            return $products;
        }

        function deleteProduct($id){
            $conn=$this->connection;
    
            $sql="DELETE FROM products  WHERE ProductID=?";
    
            $statement=$conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script> alert ('delete was succesful')</script>";
        }
    }
?>
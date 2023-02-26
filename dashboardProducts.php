<?php


session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){

include_once 'productRepository.php';
include_once 'database/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .DIV1{
            display: flex;
            flex-direction: row;
     
            margin-top: 2%;
            margin-left: 1%;
            border: 2px solid green;
            width: auto;
            height: auto;
        }
        .duA{
            display: flex;
            flex-direction: row-reverse;
            margin-right: 5%;
        }
        .update{
            background-color: blue;
        }
        a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
                text-decoration: none;
                color: initial;
                background-color: lightblue;
                border: 2px solid black;
        }
        .update{
            width: 444px;
            background-color: blue;
            border: 2px solid black;
            color: white;
        }
        
     img{
        width: 100px;
        
    }
    .firstDiv{
        width: 18vw;
        height: 24vh;
        border: 1px solid black;
        display: flex;
        flex-direction: row;
        margin-left: 0.5%;
        margin-top: 0.5%;
    }
    .firstDiv div:first-child{
        
        display: flex;
        flex-direction: column;
        width: 10vw;
        justify-content: center;
        margin-left: 5%;
    }
    .firstDiv div:first-child a{
        margin-top: 3%;
    }
    .firstDiv div:nth-child(2){
        display: flex;
        justify-content: center;
        align-items: center;
        
        margin-right: 0vw;
    }
    main{
        flex-wrap: wrap;
        height: auto;
        display: flex;
        flex-direction: row;
    }

    </style>
</head>
<body>
    <a class="duA"href="view/dashboard.php"> <h3>Dashboard</h3> </a>

    <a href="view/insertProduct.php" class="button">
        Add Product
    </a>

   
        
    <main>

   
        <?php 
            $productRepository=new ProductRepository;
            $products=$productRepository->getAllProducts();
            ?>
            
            <?php
            foreach($products as $product){
                echo "
                
                <div class='firstDiv'>

                    <div>
                    <a>Product ID: $product[ProductID]</a>
                    <a>P.Name: $product[ProductName]</a>
                    <a>Product Price: $product[ProductPrice]</a>
                    <a href='view/editProduct.php?id=$product[ProductID]'>EDIT</a>
                    <a href='view/deleteProduct.php?id=$product[ProductID]'>DELETE</a>
                    </div>
                    <div>
                    <img src='$product[ProductImage]'>
                    </div>
                
                </div>
                
                ";
                ?>
              
                <?php
            }    
        ?>
     </main>
            
</body>
</html>


   
<?php
}
?>



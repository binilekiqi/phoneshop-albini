<?php 
    class Product{
        private $productID;
        private $productName;
        private $productPrice;
        private $productDescription;
        private $productImage;
        

        function __construct($productID,$productName,$productPrice,$productDescription,$productImage)
        {
            $this->productID=$productID;
            $this->productName=$productName;
            $this->productPrice=$productPrice;
            $this->productDescription=$productDescription;
            $this->productImage=$productImage;
             
        }

        function getProductID(){
            return  $this->productID;
        }

        function getProductName(){
            return  $this->productName;
        }
        function getProductPrice(){
            return  $this->productPrice;
        }
        function getProductDescription(){
            return  $this->productDescription;
        }
        function getProductImage(){
            return  $this->productImage;
        }
        
    }

?>
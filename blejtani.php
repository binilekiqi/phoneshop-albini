<?php

$hide="";
$mshefe="";
session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:Login.php");
}else{
    $mshefe="mshefe";
    $hid="";
   if($_SESSION['role'] == "admin"){
       $hide = "";
   }else{
      $hide = "hide";
   }
  }  
?>





<!DOCTYPE html>
<html>
    <head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MobilshopLipjani - Official Home Page</title>
    <meta name="description" content="The Official Homepage for PhoneShop." />
    <meta name="keywords" content="Phone" />
    <meta name="author" content="Microsoft Co." />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" href="191.png" />
    <script
      src="https://kit.fontawesome.com/1e938fdd74.js"
      crossorigin="anonymous"
    ></script>
 
    
    <div id="Iphones">
    
    <div class="container">
      <nav class="main-nav">
        <a href="index.html">
          <img src="191.png" alt="MobilshopLipjani" width="90"/>
        </a>
        <ul class="main-menu">
          <li><a href="blejtani.php" target="_blank">Office</a></li>
          <li><a href="blejtani.php" target="_blank" >Iphone</a></li>
          <li><a href="blejtani.php" target="_blank">Samsung</a></li>
          <li><a href="blejtani.php"  target="_blank ">Google</a></li>
          <li><a href="blejtani.php"  target="_blank">Nokia</a></li>
          <li><a href="blejtani.php" target="_blank">Shiko me shume</a></li>
          <li><a href="blejtani.php" target="_blank">Ofertat</a></li>
          <li><a href="Login.php" target="_blank" class="<?php echo $mshefe?>"> Kyçu</a></li>

         
          <li  class="header_session"><a href="view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li>
          <li  class="header_session"><a href="logOut.php" class="<?php echo $hid ?>" >Logout</a></li>

        </ul>

        <style>
          .mshefe{
            display:none;
          }
          .hide{display:none;}
          .hid{display:none;}
        </style>


        <ul class="right-menu">
          <li>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
        </ul>
      </nav>
      </head>

          <style>
            .al{
            margin-top:2%;
            margin-left:10%;
             display:flex;
             flex-direction:row;
             flex-wrap:wrap;
            }

            h2{margin-top:4%}
          </style>

      <body class="body">
      <h2>Products</h2>
            <div class="al">

            
      <?php 
    include_once 'productRepository.php';
        $productsRepository=new ProductRepository;
        $products=$productsRepository->getAllProducts();

        foreach($products as $product){
            echo"
             <div  class='a' style='width:17vw'>
              <div class='image'>  
                 <img  width='100px' height='100px' src='$product[ProductImage]?>'></div>
                 <div class='pic-info'>
                 <p>P.Name: $product[ProductName]</p>
                 <p>P.Price: $product[ProductPrice]</p>
                 <p>$product[ProductDescription]</p>
             </div>
             </div>
            ";
        }
    ?>
    </div>

      </body>

    <?php 
    
    /*
    <div id="Iphone1"> 
        <img src="iphone14promax.png"  target="_blank"alt="" width="" height="200" />
        <h3>Iphone 14 Pro Max</h3>
        <p>
          <h5>1400 €</h5>
        </p>
        <a href="https://www.apple.com/iphone-14-pro/" target="_blank"> Shiko me shume <i class="fa-solid fa-chevron-right"></i></a>
      </div>
      <div id="Iphone2">
        <img src="iphone14pro.png" target="_blank" alt="" width="" height="200" />
        <h3>Iphone 14 Pro </h3>
        <p>
          <h5>1200 €</h5> 
        </p>
        <a href="https://www.apple.com/iphone-14-pro/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
      </div>
      <div id="Iphone3">
        <img src="iphone13promax.png" target="_blank" alt="" width="" height="200" />
        <h3>Iphone 13 Pro Max</h3>
        <p>
          <h5>900 €</h5> 
        </p>
        <a href="https://www.apple.com/iphone-14-pro/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
      </div>
      <div id="iphone4">
        <img src="iphone12promax.png" target="_blank" alt="" width="" height="200" />
        <h3>Iphone 13 Pro </h3>
        <p>
          <h5>800 €</h5>
        </p>
        <a href="https://www.apple.com/iphone-14-pro/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
    </div>

  
    <div id="Samsungs">

      
            <div id="Samsung1">
            <img src="SamsunGalaxyS22Ultra.png" alt="" width="" height="200" />
            <h3>Samsung Galaxy S22 Ultra</h3>
            <p>
             <h5>1200 €</h5> 
            </p>
            <a href="https://www.samsung.com/us/smartphones/galaxy-s22-ultra/" target="_blank" >Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
         
          <div id="Samsung2">
            <img src="SamsungGalaxyS22.png" alt="" width="" height="200" />
            <h3>Samsung Galaxy S22 </h3>
            <p>
              <h5>900 €</h5> 
            </p>
            <a href="https://www.samsung.com/us/smartphones/galaxy-s22-ultra/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Samsung3">
            <img src="SamsungGlaxyS21Ultra.png" alt="" width="" height="200" />
            <h3>Samsung Galaxy S21 Ultra</h3>
            <p>
             <h5>790 €</h5> 
            <a href="https://www.samsung.com/us/smartphones/galaxy-s22-ultra/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Samsung4">
            <img src="SamsungGalxayS21.png" alt="" width="" height="200" />
            <h3>Samsung Galaxy S21</h3>
            <p>
              <h5>690 €</h5>
            </p>
            <a href="https://www.samsung.com/us/smartphones/galaxy-s22-ultra/" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>

          
          <div id="Googles"></div>
          
          <div id="Google1">
            <img src="GooglePixel.png" alt="" width="" height="200" />
            <h3>Google Pixel 6</h3>
            <p>
              <h5>980 €</h5>
            </p>
            <a href="https://www.amazon.com/Google-Pixel-Unlocked-Smartphone-Ultrawide/dp/B09HJZPFDD" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
         
          <div id="Google2">
            <img src="GooglePixel5.png" alt="" width="" height="200" />
            <h3>Google Pixel 5</h3>
            <p>
              <h5>750 €</h5>
            </p>
            <a href="https://www.amazon.com/Google-Pixel-Unlocked-Smartphone-Ultrawide/dp/B09HJZPFDD" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
         
          <div id="Google3">
            <img src="GooglePixel4.png" alt="" width="" height="200" />
            <h3>Google Pixel 4G</h3>
            <p>
              <h5>840 €</h5>
            </p>
            <a href="https://www.amazon.com/Google-Pixel-Unlocked-Smartphone-Ultrawide/dp/B09HJZPFDD" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Google4">
            <img src="GooglePixel3.png" alt="" width="" height="200" />
            <h3>Google Pixel 3</h3>
            <p>
              <h5>550 €</h5>
            </p>
            <a href="https://www.amazon.com/Google-Pixel-Unlocked-Smartphone-Ultrawide/dp/B09HJZPFDD" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          
          
          <div id="Nokias"></div>
          
          <div id="Nokia1">
            <img src="Nokia6.png" alt="" width="" height="200" />
            <h3>Nokia 6</h3>
            <p>
              <h5>730 €</h5>
            </p>
            <a href="https://www.gadgetsnow.com/mobile-phones/Nokia-X200" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Nokia2">
            <img src="Nokia5.png" alt="" width="" height="200" />
            <h3>Nokia 5</h3>
            <p>
              <h5>549 €</h5>
            </p>
            <a href="https://www.gadgetsnow.com/mobile-phones/Nokia-X200" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Nokia3">
            <img src="NokiaLumia.png" alt="" width="" height="200" />
            <h3>Nokia Lumia</h3>
            <p>
              <h5>399 €</h5>
            </p>
            <a href="https://www.gadgetsnow.com/mobile-phones/Nokia-X200" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>
          
          <div id="Nokia4">
            <img src="Asus.png" alt="" width="" height="200" />
            <h3>Nokia Asus</h3>
            <p>
              <h5>475 €</h5>
            </p>
            <a href="https://www.gadgetsnow.com/mobile-phones/Nokia-X200" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>

          <div id="Nokia4">
            <img src="Xiaomi.png" alt="" width="" height="200" />
            <h3>Xiaomi Redmi Note 11</h3>
            <p>
              <h5>660 €</h5>
            </p>
            <a href="https://www.gadgetsnow.com/mobile-phones/Nokia-X200" target="_blank">Shiko me shume<i class="fa-solid fa-chevron-right"></i></a>
          </div>

  */?>
          
</html>
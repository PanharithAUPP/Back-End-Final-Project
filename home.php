<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("stockdatabase", "stock");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>251 Store</title>
<link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <script src="javascript.js" async></script>
</head>
<body>

<div class="header" style= "background:transparent">
      <div class="container">
  	   <div class="navbar" style = "padding-top: 35px">
      		<div class="logo">
      			<a href="home.php"><h1 style = "font-family: Helvetica; color: black">251</h1></a>
      		</div>
            <nav>
               <ul>
                 <li><a href="home.php">Home</a></li>
                 <li><a href="products.html">All Products</a></li>
               </ul>
           </nav>
        </div>
      </div>

      <div class="slideshow-container" style = "margin-top: 40px">
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/slideshow1.png" style="width:100%; height:500px; object-fit: cover">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/Slideshow2.png" style="width:100%; height:500px; object-fit: cover">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/slideshow3.png" style="width:100%; height:500px; object-fit: cover">
          <div class="text"></div>
        </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>


<div class="container">
    <div class="row text-center py-5">
        <?php
            $result=$database->getData();
            while($row = mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'],$row['product_image']);
            }
        ?>
    </div>


</div>

<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header column">ITEM</span>
                <span class="cart-price cart-header column">IN</span>
                <span class="cart-quantity cart-header column">CART</span>
            </div>
            <div><p>Get free same day shipping by ordering it now </p></div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn button btn-purchase" style = "background-color: black; border: none" type="button">PURCHASE</button>
      </section>

<div class="footer" style = "background-color: lightgray">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 style = "color: black">About Us</h3>
                <p style = "color: black"> The website is created by two ITM students from AUPP who want to create a good e-commerce website.</p>
            </div>
            <div class="footer-col-1" style = "text-align: left">
                <h3 style = "color: black">Contact us</h3>
                <p style = "color: black">You can reach us via our email:</p>
                <p style = "color: black">2019059menh@aupp.edu.kh</p>
                <p style = "color: black">2019025nay@aupp.edu.kh</p>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2022 - 251 Store</p>
    </div>
</div>
  <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000);
      }
  </script>
  </body>
</html>

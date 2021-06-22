<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Medic Nepal | Medicine Nepal</title>
</head>
<body>
<!-- header section starts  -->
      <?php
      require 'require/header.php';
      ?>
<!-- header section ends -->

<!-- product section starts  -->
<section class="product" id="product-top">
    <h1 class="heading">COVID-19 Essentials</h1>
    <div class="box-container">
        <div class="box" onclick="location.href='details.php'">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <p id="price">Rs.<span id="del">770</span> 623</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <p id="price">Rs.<span id="del">70</span> 23</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <p id="price">Rs.<span id="del">77</span> 62</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <p id="price">Rs.<span id="del">370</span> 280</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
    </div>

</section>
<section class="product" id="product">
    <h1 class="heading">Diabetes</h1>
    <div class="box-container">
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/ensure.png" alt="">
            <h1>Ensure Diabetes Care Powder - Vanilla Flavour 400 gm (Pet Jar)</h1>
            <p id="price">Rs.<span id="del">770</span> 623</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/ensure.png" alt="">
            <h1>Ensure Diabetes Care Powder - Vanilla Flavour 400 gm (Pet Jar)</h1>
            <p id="price">Rs.<span id="del">770</span> 623</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/ensure.png" alt="">
            <h1>Ensure Diabetes Care Powder - Vanilla Flavour 400 gm (Pet Jar)</h1>
            <p id="price">Rs.<span id="del">770</span> 623</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/ensure.png" alt="">
            <h1>Ensure Diabetes Care Powder - Vanilla Flavour 400 gm (Pet Jar)</h1>
            <p id="price">Rs.<span id="del">770</span> 623</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
    </div>
</section>
<!-- product section ends -->

<!-- footer section  -->
<?php
require 'require/footer.php';
?>

<!-- custom js file link  -->
<script src="./js/script.js"></script>
</body>
</html>
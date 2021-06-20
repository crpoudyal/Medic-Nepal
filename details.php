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

<!-- Individual product sec -->
<section class="home">
    <div class="image" id="product-img">
        <img src="images/ensure.png" alt="">
    </div>
    <div class="content">
        <h1 id="p-title">Ensure Diabetes Care Powder - Vanilla Flavour 400 gm (Pet Jar)</h1>
        <span class="tags">Diabetes</span> 
        <span class="tags">Powder</span>
        <p id="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error debitis laborum reiciendis voluptate ullam recusandae adipisci laudantium est officia et maiores quisquam non quidem deserunt optio fugiat, consequuntur odio voluptatibus?</p>
        <p id="price">Rs.770</p>
        <a href="" class="btn">Add to Cart</a>
    </div>
</section>
<!-- Individual product sec -->

<!-- Related Products -->
<section class="product" id="product">
    <h1 class="heading">Related Medicine</h1>
    <div class="box-container">
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <h3>Rs.57</h3>
            <a href="" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <h3>Rs.57</h3>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <h3>Rs.57</h3>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="box">
            <span class="offer">10% off</span>
            <img src="images/sanitizer.png" alt="">
            <h1>Tri-Activ Instant Hand Sanitizer 500 ml</h1>
            <h3>Rs.57</h3>
            <a href="#" class="btn">Add to Cart</a>
        </div>
    </div>

</section>
<!-- Related Products -->

<!-- footer section  -->
<?php
require 'require/footer.php'
?>


<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
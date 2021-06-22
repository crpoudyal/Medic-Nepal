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

<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>Running Out of <span id="banner-txt">Medicine ?</span></h3>
        <p>Medic Nepal provides medicine as prescribed by doctor on your door steps with easy payment Methods</p>
        <a href="medicine.php" class="btn">order now</a>
    </div>
    <div class="image">
        <img src="images/medical.svg" alt="">
    </div>
</section>
<!-- home section ends -->

<!-- popular category section  -->
<section class="category" id="category">
    <h1 class="heading"> Popular <span>Category</span> </h1><br/>
    <div class="box-container">
        <div class="box">
            <div class="content">
                <img src="images/covid.png" alt="covid">
                <h3>Covid Essentials</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/diabetes.png" alt="">
                <h3>Diabetes</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/homeopathy.png" alt="">
                <h3>Homeopathy</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/ayurvedic.png" alt="">
                <h3>Ayurvedic</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/vitamins.png" alt="">
                <h3>Vitamins</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/baby-products.png" alt="">
                <h3>Baby care</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/orthopedics.png" alt="">
                <h3>Orthopaedics</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <img src="images/weight.png" alt="">
                <h3>Weight Management</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur at dolorem esse. Cumque dolor nulla, nostrum rerum dolorem placeat perferendis ut maxime natus fugiat ad facilis? Consequuntur suscipit minima quam.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
</section>

<!-- speciality section ends -->

<!-- how it works  -->
<div class="step-container">
    <h1 class="heading">How it <span>works</span></h1>
    <section class="steps">
        <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>choose your Medicine</h3>
        </div>
        <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.png" alt="">
            <h3>have it and take rest</h3>
        </div>
    </section>
</div>
<!-- how it works -->

<!-- footer section  -->
<?php
require 'require/footer.php';
?>


<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
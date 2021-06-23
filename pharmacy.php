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

<!-- Pharmacy List -->
<section class="pharmacy" id="pharmacy">

    <h1 class="heading">Partner <span> Pharmacy </span> </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/ph4.jpg" alt="">
            <div class="content">
                <h3>Biratnagar Youth Pharmacy</h3>
                <p>We provide drug for Diabetes Patients and Heart Patients.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="images/ph2.jpg" alt="">
            <div class="content">
                <h3>Lalitpur Pharmacy</h3>
                <p>We provide all types of drug.</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="images/ph1.jpg" alt="">
            <div class="content">
                <h3>Nepal Baby Product</h3>
                <p>We provide Baby products only</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="images/ph3.jpg" alt="">
            <div class="content">
                <h3>Kathmandu Medic</h3>
                <p>We provide medical equipments</p>
                <a href="#" class="btn">Know More</a>
            </div>
        </div>
    </div>
</section>

<!-- Pharmacy List -->

<!-- footer section  -->
<?php
require 'require/footer.php';
?>

<!-- custom js file link  -->
<script src="./js/script.js"></script>
</body>
</html>
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
require 'Template/header.php';
?>
<!-- header section ends -->

<!-- home section starts  -->
<?php
require 'Template/home.php';
?>
<!-- home section ends -->

<!-- popular category section  -->
<?php
require 'Template/pop_category.php';
?>
<!-- popular category section -->

<!-- how it works  -->
<?php
require 'Template/work.php';
?>
<!-- how it works -->

<!-- footer section  -->
<?php
require 'Template/footer.php';
?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
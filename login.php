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

 <!-- login -->

<section class="login" id="login">
    <h1 class="heading">User<span> LogIn</span></h1>
    <div class="row">
        <div class="image">
            <img src="images/login.png" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="username"><br/><br/>
                <input type="password" placeholder="Password">
            </div><br/>
            <input type="submit" value="Login" class="login-btn"><br/><br/>
            <p id="register">Doesn't have an account ? <span id="reg-span">Register Now<span><p>
        </form>
    </div>
</section>
 <!-- login -->

 <!-- footer section  -->
<?php
require 'require/footer.php';
?>

<!-- custom js file link  -->
<script src="./js/script.js"></script>
</body>
</html>
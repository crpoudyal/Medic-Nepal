<?php
require 'database/DBController.php';
?>
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
<header>
    <a href="index.php" class="logo"><i class="fas fa-clinic-medical"></i>Medic Nepal</a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="medicine.php">Medicine</a>
        <a href="pharmacy.php">Pharmacy</a>
    </nav>
    <div id="nav-icon">
    <?php if(isset($_SESSION['USER_LOGIN'])){?>
        <a href="#" id="username" class="fas fa-user"> <?php echo $_SESSION['USER_EMAIL']?></a><br/>
        <a href="logout.php" id="login-b">Logout</a>
    <?php }else{?>
    <a href="login.php" id="login-b" class="login-btn">Login</a>
    <?php }?>
    </div> 
    <div id="menu-bar" class="fas fa-bars"></div>
</header>
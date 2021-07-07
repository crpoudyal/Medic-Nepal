<?php
require 'database/DBController.php';
require 'function.php';
if(isset($_POST['submit'])){
   $email = get_safe_value($con,$_POST['email']); 
   $password = get_safe_value($con,$_POST['password']); 
   $conform_password = get_safe_value($con,$_POST['password']);
   $phone = get_safe_value($con,$_POST['phone']); 
   $check_user = mysqli_num_rows(mysqli_query($con,"select * from User where email='$email'"));
   if($check_user>0){
       echo "email_present";
   }else{
    mysqli_query($con,"insert into User(password,email,phone) values('$password','$email','$phone')");
	echo "insert";

   }
}
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
 <!-- login -->

<section class="login" id="login">
    <h1 class="heading">User<span> Registration</span></h1>
    <div class="row">
        <div class="image">
        <a href="index.php" id="reg-span">Back to Home</a>
            <img src="images/login.png" alt="">
        </div>
        <form method="POST">
            <div class="inputBox">
                <input type="email" name="email" id="email" placeholder="E-mail"><br/><span></span><br/>
                <input type="password" name="password" id="password" placeholder="Password"><br/><span></span><br/>
                <input type="password" name="password" id="conform_password" placeholder="Conform Password"><br/><span></span><br/>
                <input type="number" name="phone" id="phone" placeholder="Phone No."><br/><span></span><br/>
            </div><br/>
            <input type="submit" name="submit" value="Register" class="login-btn"><br/><br/>
            <p id="register">Already have an account ? <a href="login.php" id="reg-span">LogIn Now</a><p>
        </form>
    </div>
</section>

 <!-- login -->
</body>
</html>
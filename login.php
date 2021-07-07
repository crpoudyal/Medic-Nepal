<?php
require 'database/DBController.php';
require 'function.php';
$msg='';
if(isset($_POST['submit'])){
   $email = get_safe_value($con,$_POST['email']); 
   $password = get_safe_value($con,$_POST['password']); 
   $sql = "select * from User where email='$email' and password='$password'";
   $res = mysqli_query($con,$sql);
   $count = mysqli_num_rows($res);
   if($count > 0){
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_EMAIL']=$email;
    header('location:index.php');
    die();

   }else{
       $msg = "Please ! Enter correct login details";
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
    <h1 class="heading">User<span> LogIn</span></h1>
    <div class="row">
        <div class="image">
        <a href="index.php" id="reg-span">Back to Home</a>
            <img src="images/login.png" alt="">
        </div>
        <form method="POST">
            <div class="inputBox">
                <input type="email" name="email" placeholder="Email" required><br/><br/>
                <input type="password" name="password" placeholder="Password" required>
            </div><br/>
            <p id="register">Forget Password? <a href="#" id="reg-span">Recover Now</a><p><br/>
            <input type="submit" value="Login" name="submit" class="login-btn"><br/><br/>
            <p id="register">Doesn't have an account ? <a href="signup.php" id="reg-span">Register Now</a><p>
            <div><?php echo $msg ?></div>
        </form>
       
    </div>
</section>
 <!-- login -->
</body>
</html>
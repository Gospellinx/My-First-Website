<?php
include("config2020/linx.php");
ob_start();
if(array_key_exists("create", $_POST)){
//getting values
$username =$_POST["username"];
$password =$_POST ["password"];
$cpassword =$_POST ["cpassword"];
$status = 1;
//inserting records into the database
$query="INSERT INTO photos.signup (username, password, cpassword, status) VALUES ('$username', '$password', '$cpassword', '$status')";
$tom = mysqli_query($handle_event, $query);
if($tom == true){

$query2="INSERT INTO photos.login (password, username, status) VALUES ('$password', '$username', '$status')";
$tom2 = mysqli_query($handle_event, $query2);
if($tom2 == true){

echo "<script>alert('MESSAGE: Sign up successful')</script>";
}
else{
  echo "<script>alert('MESSAGE: Sign up failed')</script>";
}
}
}
?>
 <!DOCTYPE html>
 <html>
 <head lang="en">
 	<title>Sign in & Out @Excellent studios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/64"></script>
    <script src="https://kit.fontawesome.com/bbd48eb4ac.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Execelent studios official website">
    <title>Execelent studios</title>
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- end of font-awesome icons-->
    <!-- CSS Style link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <div class="container">
   	<div class="forms-container">
   		<div class="signin-signup">
   			<form action="" class="sign-in-form" method="post">
   				<h2 class="title">Sign Up</h2>
   				<div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="text" name="username" placeholder="Username" />
   				</div>
   				<div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="password" name="password" placeholder="Password" />
   				</div>
   				<div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="password" name="cpassword" placeholder="Confirm password">
   				</div>
   				<input type="submit" name="create" value="create" class="btn-solid">

   				<p class="social-text">Or sign up with social Platforms</p>
   				<div class="social-media">
   					<a href="#" class="social-icon">
   						<i class="fab fa-facebook-f"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-twitter"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-google"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-linkedin-in"></i>
   					</a>
   				</div>
   			</form>
   		</div>
   	</div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>One of US ?</h3>
          <p>Click below to to login we are glad to have you back</p>
           <a class="btn transparent" href="signin.php">Sign in</a>    
         </div>
        <img src="r.svg" class="image" alt="">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>Sign in and be a part of our great studio </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="log.svg" class="image" alt="">
      </div> 
    </div>
   </div>
    </body>
 </html>
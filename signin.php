<?php 
session_start();
include ("config2020/linx.php");
$MSG = "";
if(array_key_exists("login", $_POST)){
$username=$_POST['username'];
$password=$_POST['pass'];
if($username!="" && $password!=""){
$select="SELECT * FROM photos.login WHERE username='$username' AND password='$password'";
$command_ = mysqli_query($handle_event, $select);
if(mysqli_num_rows($command_)>0){
$d=mysqli_fetch_array($command_);
if($d['status']== 1){
$_SESSION['islogged']=1;
$_SESSION['username']=$d['username'];
header("location:index.php");
}
}else{
echo "<script>alert('Wrong username or password!, try again');window.location='signin.php'</script>";
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
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="password" name="pass" placeholder="Password" />
          </div>
          <input type="submit" name="login" value="Login" class="btn-solid">

          <p class="social-text">Or sign in with social Platforms</p>
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
          <h3>New here ?</h3>
          <p>Sign up and be a part of our great studio where we provide our clients with the very best of photography</p>
           <a class="btn transparent" href="signup.php">Sign up</a>    
         </div>
        <img src="p.svg" class="image" alt="">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>Sign in and be a part of our great studio </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="log.svg" class="image" alt="cruise">
      </div> 
    </div>
   </div>
    </body>
 </html>
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
header("location:viewadmin.php");
}
}else{
echo "<script>alert('Wrong username or password!, try again');window.location='admin.php'</script>";
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/64"></script> 
    <script src="https://kit.fontawesome.com/bbd48eb4ac.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Execelent studios official website">
    <title>Execelent studios</title>
     <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- end of font-awesome icons-->
    <!-- CSS Style link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body> 
	<div class="container">
   	<div class="forms-container">
   		<div class="signin-signup">
 	<form action="" method="post" class="sign-in-form">
			<fieldset>
				<legend><h2 class="title">Admin @ Excelent Studios<i class="fa fa-trademark" style="font-size: 46px;color: orange"></i></h2></legend>
				<div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="text" name="username" placeholder="User name">
   				</div>
              <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="password" name="pass" placeholder="Password" />
          </div>
          <input type="submit" name="login" value="Login" class="btn-solid">

		</form>     
</body>

</html>
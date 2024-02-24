<?php
include("config2020/linx.php");
ob_start();
if(array_key_exists("create", $_POST)){
//getting values
$surname =$_POST["surname"];
$firstname =$_POST ["firstname"];
$email =$_POST ["email"];
$phone =$_POST ["phone"];
$gender =$_POST ["gender"];
$service = $_POST["service"];
$method = $_POST["method"];
//inserting records into the database
$query="INSERT INTO photos.contact(surname, firstname, email, phone, gender, service, method) VALUES ('$surname', '$firstname', '$email', '$phone', '$gender', '$service', '$method')";
$tom = mysqli_query($handle_event, $query);
if($tom == true){
echo "<script>alert('MESSAGE: Data sent successful')</script>";
}
else{
echo "<script>alert('MESSAGE: Data sent failed')</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
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
 	<form action="#" method="post" class="sign-in-form">
			<fieldset>
				<legend><h2 class="title">Contact us @ Excelent Studios<i class="fa fa-trademark" style="font-size: 46px;color: orange"></i></h2></legend>
				<div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="text" name="surname" placeholder="Surname">
   				</div>
               <div class="input-field">
   					<i class="fas fa-user"></i>
   					<input type="text" name="firstname" placeholder="First name">
   				</div>
   				<div class="input-field">
   					<i class="fas fa-envelope"></i>
   					<input type="text" required="required" name="email" placeholder="Email" >
   				</div>
				<div class="input-field">
   					<i class="fas fa-phone"></i>
   					<input type="text" name="phone" placeholder="Phone no">
   				</div>
				<div class="input-field">
   					<i class="fas fa-address-book"></i>
   					<input type="text" name="service" placeholder="Service/Product">
				</select>
   				</div>
				<div class="checks">
					<p>Gender:</p>
					<input type="radio" name="gender" id="gender" value="male" >
					<label >Male</label>

					<input type="radio" name="gender" id="gender" value="female" >
					<label for="phone">Female</label>
				</div>

				
				<div class="checks">
					<p >Preferred Method of contact:</p>
					<input type="radio" name="method" id="method" value="email">
					<label for="email">Email</label>

					<input type="radio" name="method" id="" value="phone">
					<label for="phone" >phone</label>
				</div>
				
				<label><input class="btn-solid" type="submit" name="create" value="Contact us"></label>
			
   				<div class="checks"><p>Or Contact us with social Platforms</p></div>
   				<div class="social-media"> 
   					<a href="#" class="social-icon">
   						<i class="fab fa-facebook-f"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-twitter"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-instagram"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-google"></i>
   					</a>
   					<a href="#" class="social-icon">
   						<i class="fab fa-linkedin-in"></i>
   					</a>
   	
		</form>      
</body>
</html>
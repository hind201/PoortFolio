<?php
require('connexiondb.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="dist/css/style.css" rel="stylesheet"> 
  <title>Login</title>
</head>
 <?php
if(isset($_POST['login'])){
   $email = htmlspecialchars($_POST['email']) ;
   $password = htmlspecialchars($_POST['pass']);
    $query = $connection->query("SELECT * FROM loginn WHERE email='$email' AND pass='$password' ");
        if(!empty($_POST['pass'])){

                $_SESSION['pass']=$password;
                    header("location:portfolio.php");
                    exit();


        }else{
            echo '<script>alert("Your email or password wrong!")</script>';

        }

}
?>
<body>
<div class="login">
	<h1>Login</h1>
		<form action="" method="POST">
			<div class="form-input">
				<input type="text" name="email" placeholder="email"/>	
			</div>
			<div class="form-input">
				<input type="password" name="pass" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="login" name="login" class="btn-login"/>
		</form>
	</div>

<!-- <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
			<form action="" method="POST">
				
			<div class="form-input">
				<input type="text"  name="email" placeholder="Enter the User Email"/>	
			</div>
			<div class="form-input">
				<input type="password"  name="pass" placeholder="password"/>
			</div>
			<button type="submit" class="btn__form"  name="login">login</button>
			
		</form>
			
		</div>
	</div>
</div> -->
</body>
</html>
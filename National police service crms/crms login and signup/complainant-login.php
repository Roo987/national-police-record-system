<?php

if($_POST){
	$host = "localhost";
	$user = "root"; 
	$pass = "";
	$db = "users";
	
	
		$username=$_POST['email'];
		$password=$_POST['password'];
		$conn=mysqli_connect($host,$user,$pass,$db);
		
		$query="SELECT * FROM complainant where  email='$email' and password=MD5('$password')";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['users']='true';
			header('location:../users/index.php');
		}else{
			echo 'Wrong Email or Password';
			}
}
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login/ Sign up form</title>
    <link rel="stylesheet" href="MAIN.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">
</head>
<body>
    <form method ="post">
       
       
            
    <div class="container">
        <form class="form" id="login">
        <h1 class="form__title">Login</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
            <input type="text" name="username" class="form__input" autofocus placeholder="Username" required>
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type = "password" name="password" class="form__input" autofocus placeholder="Password" required>
            <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" input type="submit" value="Login" name ="submit">Login</button>
        <p class="form__text">
            <a href="./forgotPassword.html" class="form__link">Forgot your password?</a>
        </p>
        <p class="form__text">
            <a  class="form__link" href="./complainant-signup.php" id="linkCreateAccount">Don't have an account?Create account</a>
        </p>
        </form>
    </div>
    <script src="MAIN.js"></script>
    </body>

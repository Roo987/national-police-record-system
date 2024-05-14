<?php

if($_POST){
	$host = "localhost";
	$user = "root"; 
	$pass = "";
	$db = "users";
	
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conn=mysqli_connect($host,$user,$pass,$db);
		
		$query="SELECT * FROM police where  username='$username' and password=MD5('$password')";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['users']='true';
			header('location: change-password.php');
		}else{
			echo 'Wrong User Name or Password';
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
        <a  class="form__link" href="../index.php" id="linkCreateAccount"><b>Back to Home?</b></a><br>
        <h3 class="form__title">Police Login</h3>
        <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
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
            <a  class="form__link" href="police-signup.php" id="linkCreateAccount">Don't have an account?Create account</a>
        </p>
        </form>
    </div>
    <script src="MAIN.js"></script>
    </body>

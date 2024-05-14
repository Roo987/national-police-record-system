<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login/ Sign up form</title>
    <link rel="stylesheet" href="../crms login and signup/MAIN.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">
</head>
<body>
    <div class="container">
             <form class="form" form action="police-signup.php" method="post">
            <h1 class="form__title">Create Account</h1>
            <a  class="form__link" href="../index.php" id="home"><b>Home</b></a>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="number" name="username" required="required" class="form__input" autofocus placeholder="Username eg.12345">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" name= "email" required="required" class="form__input" autofocus placeholder="Email Address eg police@gmail.com">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="number" name= "phone"required="required"  class="form__input" autofocus placeholder="Phone Number eg 0712345678">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" required="required" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name= "cpassword" required="required" class="form__input" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button"type="submit"name="submit">Continue</button>
            <p class="form__text">
                <a  class="form__link" href="../police/index.php" id="login">Already have an account?Sign in</a>
            </p>
            </form>

    </div>
    <?php

if (isset($_POST["submit"])){
	include '../crms login and signup/dbconfig.php';
	
$sql = "INSERT INTO police(username, email, phone,  password, cpassword)
		 VALUES('".$_POST["username"]."', '".$_POST["email"]."','".$_POST["phone"]."', MD5('".$_POST["password"]."'), MD5('".$_POST["cpassword"]."'))";
		 
	if($conn->query($sql) === TRUE){
		echo
			"<script type='text/javascript'>
				alert('Record added succesfully. Go to the Log in page.');
				</script>";
		}
		else{
	
			"<script type='text/javascript'>
				alert('Error: " . $sql . "<br>" . $conn->error."');
				</script>";
		}
		$conn->close();
	}

?>
    
    </body>
</html>
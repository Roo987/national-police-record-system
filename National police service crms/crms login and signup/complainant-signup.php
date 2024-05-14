
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login/ Sign up form</title>
    <link rel="stylesheet" href="MAIN.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">

    <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "http://localhost/source/National%20police%20service%20crms/users/check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</head>
<body>
    <div class="container">
             <form class="form" form action="complainant-signup.php" method="post">
            <h1 class="form__title">Create Account</h1>
            <a  class="form__link" href="../index.php" id="home"><b>Back to Home</b></a>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="username" required="required" class="form__input" autofocus placeholder="Username eg. John">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" name= "email" required="required" class="form__input" autofocus placeholder="Email Address eg user@gmail.com">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="number" name= "contactNo" required="required" class="form__input" autofocus placeholder="Contact Number eg 0712345678">
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
                <a  class="form__link" href="../users/index.php" id="login">Already have an account?Sign in</a>
            </p>
            </form>

    </div>
    <?php

if (isset($_POST["submit"])){
	include 'dbconfig.php';
	
$sql = "INSERT INTO complainant(username, email,  password, cpassword)
		 VALUES('".$_POST["username"]."', '".$_POST["email"]."', MD5('".$_POST["password"]."'), MD5('".$_POST["cpassword"]."'))";
		 
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
     <script src="MAIN.js"></script>
    </body>
    <script>
        function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(myFOrm.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
     </script>
</html>

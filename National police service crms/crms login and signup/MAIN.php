

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
       
       
    <div class="wrapper">     
    <div class="container">
        <form class="form" id="login">
        <a  class="form__link" href="../index.php" id="linkCreateAccount"><b>Back to Home?</b></a>
        <h1 class="form__title">Login</h1>
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
            <a href="../admin/forgot-password.php" class="form__link"></a>
        </p>
        <p class="form__text">
            <a  class="form__link" href="./signup.php" id="linkCreateAccount"></a>
        </p>
        </form>
    </div>
    <script src="MAIN.js"></script>
    </body>

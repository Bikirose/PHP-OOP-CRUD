
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="../View/css/styles.css" rel="stylesheet">
	<link href="../View/css/bootstrap.min.css" rel="stylesheet">
	<link href="../View/css/bootstrap.css" rel="stylesheet">
</head>
<body background="../images/download.jpg">
  <div class="wrapper">
    <form class="form-signin well" action="../Controller/controller.php" method="POST">       
      <h2 class="form-signin-heading"><center>Please login</center></h2>
      <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" /></br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button> </br>
      <p>Don't have an account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="../View/signup.php">Create Account</a></p>
    </div>  
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
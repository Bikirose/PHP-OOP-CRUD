<!DOCTYPE html>
<html>
<head>
	<title>Signup form</title>
	<link href="../View/css/styles.css" rel="stylesheet">
	<link href="../View/css/bootstrap.min.css" rel="stylesheet">
	<link href="../View/css/bootstrap.css" rel="stylesheet">
</head>
<body background="../images/download.jpg">
 <div >
    <form class="form-signin well" action="../Controller/controller.php" method="POST" enctype="multipart/form-data">       
      <h2 class="form-signin-heading"><center><b>Create an account</b></center></h2>
      <input type="text" class="form-control" name="fullname" placeholder="full name" required="" autofocus="" /></br>
      <input type="text" class="form-control" name="username" placeholder="Username" required=""/>  <br>    
       <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  <br> 
       <input type="text" class="form-control" name="contact" placeholder="Contact" required=""/>  <br> 
       <input type="text" class="form-control" name="address" placeholder="Address" required=""/>  <br> 
       <label>Gender:</label>
       <input type="radio"  name="gender" value="Male">Male &nbsp;&nbsp;
       <input type="radio"  name="gender" value="Female">Female  <br>
       <label>Choose you profile picture</label><br>
       <input type="file" name="image"><br>
       <input type="text" class="form-control" name="college" placeholder="College" required=""/>  <br> 
       <label>Write something about yourself</label>
       <textarea name="about" placeholder="write something about your self"></textarea>
       <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Create</button> </br>
     
       </div>  
    </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
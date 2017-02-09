<?php
include('../model/crud.php');
$obj= new crud();
  $id=$_GET['edit_id'];
$result=$obj->select_individual($id);
  while($row = $result->fetch_array()){
  $fullname = $row['fullname'];
  $username = $row['username'];
  $password = $row['password'];
  $contact = $row['contact'];
  $address = $row['address'];
  $gender = $row['gender'];
  $profile = $row['profile'];
  $college = $row['college'];
  $about = $row['about'];


  
 }
?>
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
<form class="form-signin well" action="../Controller/controller.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">       
      <h2 class="form-signin-heading"><center><b>Create an account</b></center></h2>
        
  
      <input type="text" class="form-control" name="fullname" value=<?php echo $fullname;?> required="" autofocus="" /></br>
      <input type="text" class="form-control" name="username" value=<?php echo $username;?> required=""/>  <br>    
       <input type="password" class="form-control" name="password" value=<?php echo $password;?> required=""/>  <br> 
       <input type="text" class="form-control" name="contact" value=<?php echo $contact;?> required=""/>  <br> 
       <input type="text" class="form-control" name="address" value=<?php echo $address;?> required=""/>  <br> 
       <label>Gender:</label>
       <input type="radio"  name="gender" value="Male">Male &nbsp;&nbsp;
       <input type="radio"  name="gender" value="Female">Female  <br>
       <label>Choose you profile picture</label><br>
       <input type="file" name="image"><br>
       <input type="text" class="form-control" name="college" value=<?php echo $college; ?> required=""/>  <br> 
       <label>Write something about yourself</label>
       <textarea name="about"><?php echo $about;?></textarea>
       <button class="btn btn-lg btn-primary btn-block" type="submit" name="update">Update</button> </br>
     
       </div>  
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
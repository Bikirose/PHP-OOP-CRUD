<?php
session_start();

if(empty($_GET['view_id'])){
    //
    header('Location:../view/login.php');
    exit;
  }

if(empty($_SESSION['username'])){
  header('location:../view/login.php');
}
include('../model/crud.php');
//include('../Controller/controller.php');
$obj = new crud;
if(isset($_GET['view_id'])){
    $id=$_GET['view_id'];
$result = $obj->select_profile($id);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <center><h1>User's profile</h1>
  <button type="button" class="btn btn-primary"> <a href="../view/logout.php" style="color: #FFF;"">Log out</a></button>

    <div class="container well">
      <div class="row" style="background-color: #eff1f4;">
        <div class="col-lg-6">
    <?php
  while($row = $result->fetch_array()){?>
        <table class="table table-responsive">
        <tr>
         <td> <img src="<?php echo $row['profile'];?>" height="180px" width="200px"></td></tr>
          <tr><td>Full Name</td>
          <td><?php echo $row['fullname']; ?></td></tr>
          <tr><td>Gender</td><td>
          <p><?php echo $row['gender']; ?></p></td></tr>
          <tr>
            <td>College</td>
              <td><?php echo $row['college'] ;?></td>
            </tr>
            <tr>
            <td>User's Address</td>
              <td><?php echo $row['address'] ;?></td>
            </tr>
            <tr>
            <td>Contact No.</td>
              <td><?php echo $row['contact'] ;?></td>
            </tr>
            <tr>
            <td>About </td>
              <td><?php echo $row['about'] ;?></td>
            </tr>
           </table>
           <?php } ?>
        </div>
      </div>
     </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
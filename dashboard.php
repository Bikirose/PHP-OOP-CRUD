<?php
session_start();
if(empty($_SESSION['username'])){
  header('location:../view/login.php');
  }
include('../model/crud.php');
$obj = new crud;
$result = $obj->select();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="../View/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/css/jq.css">
    <!--<link href="../View/css/bootstrap.css" rel="stylesheet">-->
  </head>
  <body>
  <center>
 <table>
 <tr><td style="color: Green; font-size: 25px;">Welcome to Miksiweb&nbsp;&nbsp;</td>
   <td style="color: blue; font-size: 25px;"> <?php echo $_SESSION['username'];?> </td>
 </tr>
 </table>

<button type="button" class="btn btn-primary"> <a href="../view/logout.php" style="color: #FFF;"">Log out</a></button>
<button type="button" class="btn btn-primary"> <a href="../view/login.php" style="color: #FFF;"">Login with another account</a></button>
<button type="button" class="btn btn-info"> <a href="#" style="color: #FFF;"">Info</a></button>
</center>
<div class="container">
      <div class="row" style="background-color: #fff;">
        <div class="col-lg-10">
        <?php
 while($row = $result->fetch_array()){ ?>
        <h1><?php echo $row['fullname']; ?></h1>
        <?php if($_GET['login_id']==$row['id']){ ?>
            <button type="button" class="btn btn-success"> <a href="../View/Profile.php?view_id=<?php echo $row['id'];?>" style="color: #FFF;">View Full Profile</a></button>


<button type="button" class="btn btn-info"> <a href="../View/edit.php?edit_id=<?php echo $row['id']; ?> " style="color: #FFF;"">Edit Profile</a></button>
            <button type="button" class="btn btn-danger"> <a href="../Controller/controller.php?delete_id=<?php echo $row['id']; ?> " style="color: #FFF;"">Delete Profile</a></button>


            <?php }else{ ?>

              <button type="button" class="btn btn-success"> <a href="../View/Profile.php?view_id=<?php echo $row['id'];?>" style="color: #FFF;">View </a></button>
              <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">
  Delete
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Info</h1>
      </div>
      <div class="modal-body">
        <h2>Login with respective username for performing any operation!</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Got it</button>
      </div>
    </div>
  </div>
</div>

          

           <?php } ?>
           <?php }?>

        </div>
      </div>
     
    </div>



<!-- Button trigger modal -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js">
    

    </script>
    
  </body>
</html>
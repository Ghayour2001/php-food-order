<?php
include('../config/connection.php');   //Database Connection 
include "include/menu.php";



$admin_id=$_REQUEST['id'];
$select ="SELECT * from tbl_admin where id='$admin_id'";
$query =mysqli_query($connection,$select) ;
$data = mysqli_fetch_assoc($query);

$oldpws = $data['password'];
 
if(isset($_POST['submit']))
{
    
  $current =md5( $_POST['current']);
  $new = md5( $_POST['new']);
  $confirm =md5( $_POST['confirm']);

  if($current == $oldpws)
  {
       if($new == $confirm)
       {
      $update = "UPDATE tbl_admin set password  = '$new' where id='$admin_id'";
      $query = mysqli_query($connection,$update );
      if($query)
      {
        echo "Password changed succefully";
      }
      else
      {
        echo "Error ";
      }
     
       }
       else
       {
           echo "Your both password do not match";
           
       }



  }
  else
  {
    echo "You entered wrong Password";  
  }



}
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST" action="">
                    <div class="form-group">
                      <label for="">Current Password</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Current Password" name="current">
                    </div>
                    <div class="form-group">
                      <label for="">New Password</label>
                      <input type="text" class="form-control" id="" placeholder="Enter New Password" name="new">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" id="" placeholder="Confirm New Password" name="confirm">
                    </div>
                    <input type="submit" class="btn btn-info" value="Change Password" name="submit">
                </form>
                </div>
           
            </div>
        </div>



    </div>
</div>





<?php include"include/footer.php" ?>
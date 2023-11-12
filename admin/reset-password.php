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
  $current = $_POST['current'];
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

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
  <label for="">Current Password</label><br>
  <input type="text" name="current"><br>
  <label for="">New Password</label><br>
  <input type="text" name="new"><br>
   <label for="">confirm Password</label><br>
  <input type="text" name="confirm"><br>
  <input type="submit" name="submit" value="Change">
  </form>
</body>
</html>
<?php include"include/footer.php" ?>
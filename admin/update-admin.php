<?php include('../config/connection.php');   //Database Connection ?>
<?php include("../admin/include/menu.php"); ?>

<?php 
$admin_id=$_REQUEST['id'];
$result=mysqli_query($connection,"SELECT * FROM tbl_admin where id='$admin_id'");
$row=mysqli_fetch_array($result);

// Query for Updation

if(isset($_POST["Submit"])){
    $full_name=($_POST["full_name"]);
    $username=($_POST["username"]);
    // $password=($_POST["password"]);
    

    $sql="UPDATE tbl_admin set full_name='$full_name', username='$username'  where id='$admin_id' ";
    $result1=mysqli_query($connection,$sql);
     if($result1){
         echo"<script> alert('Data Updated Successfully');</script>";
         header('location:manage-admin.php');
     }
     else{
         echo"<script> alert('Something Wrong Happened');</script>";
     }
}

  
//   $admin_id=$_REQUEST['id'];
// $result=mysqli_query($connection,"SELECT * FROM tbl_admin where id='$admin_id'");
// $row=mysqli_fetch_array($result);

// //  Process the value from Form
// if(isset($_POST["Submit"])){
   
//   // 1.get the data from form
//  $full_name = $_POST['full_name'];
//  $username = $_POST['username'];
//  $password = $_POST['password'];

//  $result1=mysqli_query($connection,"UPDATE tbl_admin set full_name='$full_name', $username='username', $password='password' where id='$admin_id'");
 
//  if($result1){
//    echo "<script> alert('Updated Successfully'); </script>";
//    header('location:manage-admin.php');
//  }
//  else{
//   echo "<script> alert(' lalala lleeee lalala'); </script>";
//  }


// // Execute Query for updating data into database 




// }

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ;?>" >
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" class="form-control" value="<?php echo $row['full_name'] ?>" placeholder="Enter Full Name " name="full_name">
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" value="<?php echo $row['username'] ?>" placeholder="Enter Username" name="username">
                    </div> 
                    <!-- <div class="form-group">
                      <label for="">Passwordd</label>
                      <input type="password" class="form-control" value="<?php echo $row['password'] ?>" placeholder="Enter password" name="password">
                    </div> -->
                   
                    <input type="submit" class="btn btn-info" value=" Update " name="Submit">
                </form>
                </div>
           
            </div>
        </div>



    </div>
</div>





<?php include("../admin/include/footer.php"); ?>


<?php
  // //  Process the value from Form
  // if(isset($_POST["Submit"])){
   
  //   // 1.get the data from form
  //  $full_name = $_POST['full_name'];
  //  $username = $_POST['username'];
  //  $password = $_POST['password'];

  //  $result1=mysqli_query($connection,"UPDATE tbl_admin set full_name='$full_name', $username='username', $password='password' where id='$admin_id'");
  //  if($result1){
  //    echo "<script> alert('Updated Successfully'); </script>";
  //    header('location:manage-admin.php');
  //  }
  //  else{
  //   echo "<script> alert(' lalala lleeee lalala'); </script>";
  //  }
 

  // // Execute Query for updating data into database 
  
 


  // }

?>
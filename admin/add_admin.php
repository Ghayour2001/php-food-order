<?php

use LDAP\Result;

 include("include/menu.php") ?>
<?php include('../config/connection.php');   //Database Connection ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST">
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Full Name " name="full_name">
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" id="" placeholder="Enter Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-info" value="Add Admin" name="Submit">
                </form>
                </div>
           
            </div>
        </div>



    </div>
</div>





<?php include("include/footer.php") ?>


<?php
  //  Process the value from Form
  if(isset($_POST["Submit"])){
   
    // 1.get the data from form
   $full_name = $_POST['full_name'];
   $username = $_POST['username'];

  //  Password encrypted with md5 function
   $password = md5($_POST['password']);


  //  SQL Query to save the Data in Database
  $sql="INSERT INTO tbl_admin SET
  full_name = '$full_name',
  username = '$username',
  password = '$password'
  ";

  // Execute Query for saving data into database 
  
  
  $result = mysqli_query($connection,$sql) or die(mysqli_connect_error());

  //Check whether the data is inserted or not

  if($result==TRUE)
  {
   echo "<script> alert('Data has been Inserted') </script>";
   header('location:manage-admin.php');
  }
  else{
    echo "<script> alert('Failed to Insert Data') </script>";
  }



  }

?>
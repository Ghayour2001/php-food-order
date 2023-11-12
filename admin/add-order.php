<?php

use LDAP\Result;

 include("include/menu.php") ?>
<?php include('../config/connection.php');   //Database Connection ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Order</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST">
                    <div class="form-group">
                      <label for="">Food</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Food " name="food">
                    </div>
                    <div class="form-group">
                      <label for="">Price</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Price" name="price">
                    </div>
                    <div class="form-group">
                      <label for="">Quantity</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Quantity" name="quantity">
                    </div> 
                    <div class="form-group">
                      <label for="">Total</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Total" name="total">
                    </div>
                    <div class="form-group">
                      <label for="">Order Date</label>
                      <input type="date" class="form-control" id="" placeholder="Enter Order Date" name="order_date">
                    </div> 
                   
                     <div class="form-group">
                      <label for="">Status</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Status" name="status">
                    </div> 
                    <div class="form-group">
                      <label for="">Customer Name</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Customer Name" name="cus_name">
                    </div> 
                    <div class="form-group">
                      <label for="">Customer Contact</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Customer Contact" name="cus_contact">
                    </div> 
                    <div class="form-group">
                      <label for="">Customer Email</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Customer Email" name="cus_email">
                    </div> 
                    <div class="form-group">
                      <label for="">Customer Address</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Customer Address" name="cus_address">
                    </div>
                    <input type="submit" class="btn btn-info" value="Add Admin" name="Submit">
                </form>
                </div>
           
            </div>
        </div>



    </div>
</div>





<?php include"include/footer.php" ?>


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
<?php
include "../config/connection.php";
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $password=$_POST['Password'];

   $result = mysqli_query($connection,"SELECT * FROM login WHERE name='$username' and Password = '$password' ");
   $row= mysqli_fetch_array($result);
   if($row>0){
    header('location:index.php');
   }
   else
   {
  echo "<script> alert('she de tek nade')</script>";
   }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
    <h1 class="text-center">Login form</h1>
<div class="col-md-6 col-lg-offset-3 mt-5 " > 
    <form  action="" method="post" enctype="" >
        

        
        <div class="mb-3">
          <label for="name" class="form-label">User Name</label>
          <input type="text" class="form-control" name="name">
         
        </div>
        <div class="mb-3">
          <label for="fathername" class="form-label">Password</label>
          <input type="text" class="form-control" name="Password">
         
        </div > 
       
       
        <br>
       
        <button type="submit" name="submit" class="btn btn-primary btn-block ">Submit</button>
       
      </form>
    </div>
</body>
</html>
<?php
include "../config/connection.php";
// include "../config/session.php";


if(isset($_POST['submit'])){
   
  //  $username = $_POST['name'];
  //  $password = md5($_POST['password']);
   $username=mysqli_real_escape_string($connection,htmlentities(trim(strip_tags($_POST['name']))));
   $password=mysqli_real_escape_string($connection,htmlentities(trim(strip_tags(md5($_POST['password'])))));

   //SQL Query to check whether user with given username and password exists or not
   $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

   //Execute the Query
   $result=mysqli_query($connection,$sql);

   //count rows whether the user exists or not
   $row = mysqli_fetch_array($result);

   if($row>0)
   {
    session_start();

    $_SESSION['user_id']=$row['id'];
     header('location:index.php');
     //User Available
     echo  "<script> Alert('Logged-In Successfully') </script>";
    
   
   }
   else
   {
     //User not available
     echo "<script> alert('Wrong username and password')</script>";
    //  header('location:index.php');
   }


}



?>

<!DOCTYPE html>
<html>
<head>
    
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
     <form action="" method="POST">
     	<h2>LOGIN</h2>
     	<label>User Name</label>
     	<input type="text" name="name" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<!-- <button type="submit" name="submit">Login</button> -->
         <input type="submit" name="submit" value="Login">
          <a href="" class="ca">Create an account</a>
     </form>
</body>
</html>

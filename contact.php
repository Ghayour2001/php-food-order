<?php
include ("config/connection.php");
include ("include-front/manu.php");

?>
<?php  
if(isset($_POST["Submit"])){
//    echo "shy tekk dy bacha";
    // 1.get the data from form
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];


  //  SQL Query to save the Data in Database
  $sql="INSERT INTO tbl_contact SET
  name = '$name',
  email = '$email',
  subject = '$subject',
  message = '$message'";

  // Execute Query for saving data into database 
  
  
  $result = mysqli_query($connection,$sql) or die(mysqli_connect_error());

  //Check whether the data is inserted or not

  if($result==TRUE)
  {
   echo "<script> alert('Data has been Inserted') </script>";
//    header('location:contact.php');
  }
  else{
    echo "<script> alert('Failed to Insert Data') </script>";
  }
}
?>



<section class="food-search text-center">
        <div class="container">
            
            <form class="contact" action="" method="POST">
                <input type="text"  name="name" placeholder="Enter Your Name" required> <br><br>
                <input type="email" name="email" placeholder="Enter Your Email" required> <br><br>
                <input type="text" name="subject" placeholder="Subject" required> <br><br>
                <input type="text " style="padding: 42px 18%;" name="message" placeholder="Enter Your Message" required> <br><br>
                
                <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
            </form>

        </div>
    </section>
















<?php

include ("include-front/footer.php");


?>



<?php

use LDAP\Result;

 include("include/menu.php") ?>
<?php include('../config/connection.php');   //Database Connection ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                    <form method="POST" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label for="">Title :</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Title " name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Image :</label>
                            <input type="file" class="form-control" id="" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Featured</label>
                            <input type="Radio" id="" name="featured" value="Yes"> Yes
                            <input type="Radio" id="" name="featured" value="No"> No
                        </div>
                        <div class="form-group">
                            <label for="">Active</label>
                            <input type="radio" id="" name="active" value="Yes"> Yes
                            <input type="radio" id="" name="active" value="No"> No
                        </div>
                        <input type="submit" class="btn btn-info" value="Add Category" name="Submit">
                    </form>
                </div>

            </div>
        </div>



    </div>
</div>





<?php include("include/footer.php"); ?>


<?php
  //  Process the value from Form
  if(isset($_POST["Submit"])){
   
    //echo"Clicked"
    $title = $_POST['title'];

    if(isset($_POST['featured']))
    {
      $featured = $_POST['featured'];
    }
    else
    {
      $featured = "No"; 
    }

    if(isset($_POST['active']))
    {
      $active = $_POST['active'];
    }
    else
    {
      $active = "No";
      
    }

     
    $image="Uploaded_images/".time().$_FILES['image']['name'];

   if(move_uploaded_file($_FILES['image']['tmp_name'], $image))
   {}

    //  SQL Query to save the Data in Database
  $sql="INSERT INTO tbl_Category SET
  title = '$title',
  image_name ='$image',
  featured = '$featured',
  active = '$active'
  ";

  
$result = mysqli_query($connection,$sql) or die(mysqli_connect_error());

//Check whether the data is inserted or not

if($result==TRUE)
{
 echo "<script> alert('Data has been Inserted') </script>";
 header('location:manage-category.php');
}
else{
  echo "<script> alert('Failed to Insert Data') </script>";
}

  }
?>
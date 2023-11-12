<?php

use LDAP\Result;

 include("include/menu.php") ?>
<?php include('../config/connection.php');   //Database Connection ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                      <label for="">Title :</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Title " name="title">
                    </div>
                     <div class="form-group">
                      <label for="">Description :</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Description" name="description">
                    </div> 
                     <div class="form-group">
                      <label for="">Price:</label>
                      <input type="text" class="form-control" id="" placeholder="Enter Price" name="price">
                    </div> 
                    <div class="form-group">
                      <label for="">Image :</label>
                      <input type="file" class="form-control" id=""   name="image">
                    </div>
                     <div class="form-group">
                      <label for="">Category :</label>
                      <Select class="form-control" name="category">

                        <?php
                        // select category from database 

                        $select="SELECT * FROM tbl_category WHERE active = 'Yes'";
                        $result= mysqli_query($connection,$select);
                        $count=mysqli_num_rows($result); 

                        if($count>0)
                        {
                           while($row=mysqli_fetch_array($result))
                           {
                            //    get all the values 
                            $id =$row['id'];
                            $title =$row['title'];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $title ?></option> 
                            <?php
                           }
                        }
                        else
                        {
                           ?>
                            <option value="0">NO category found</option>  
                            <?php  
                        }
                        ?>
                            
                      </Select>
                    </div>
                    <div class="form-group">
                      <label for="">Featured</label>
                      <input type="Radio"  id="" name="featured" value="Yes"> Yes
                      <input type="Radio"  id="" name="featured" value="No"> No
                    </div>
                    <div class="form-group">
                      <label for="">Active</label>
                      <input type="radio" id=""  name="active" value="Yes"> Yes
                      <input type="radio" id=""  name="active" value="No"> No
                    </div>
                    <input type="submit" class="btn btn-info" value="Add Food" name="Submit">
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
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

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

    //  SQL Query to save the Data in Database
  $sql="INSERT INTO tbl_food SET
  title = '$title',
  description = '$description',
  price = '$price',
  category_id = '$category',
  featured = '$featured',
  active = '$active',
  image_name ='$image'

 
  ";

  
$result = mysqli_query($connection,$sql) or die(mysqli_connect_error());

//Check whether the data is inserted or not

if($result==TRUE)
{
 echo "<script> alert('Data has been Inserted') </script>";
 header('location:manage-food.php');
}
else{
  echo "<script> alert('Failed to Insert Data') </script>";
}

  }
?>
<?php include('../config/connection.php');   //Database Connection ?>
<?php include("../admin/include/menu.php"); ?>

<?php 
$food_id=$_REQUEST['id'];
$result=mysqli_query($connection,"SELECT * FROM tbl_food where id='$food_id'");
$row=mysqli_fetch_array($result);

// Query for Updation


if(isset($_POST["Submit"])){

    $title=($_POST["title"]);
    $description = ($_POST['description']);
    $price = ($_POST['price']);
    $category_id = ($_POST['category']);
    $featured=($_POST['featured']);
    $active=($_POST['active']);

    $image="Uploaded_images/".time().$_FILES['image']['name'];
    if($_FILES['image']['name']!="")
    {
       
    if(move_uploaded_file($_FILES['image']['tmp_name'], $image))
    {


    }
    }
    else{
        echo "<script>alert('hit2');</script>";

        $image=$row['image_name'];
    }
   
    

    $sql="UPDATE tbl_food set title='$title', description='$description', price='$price', category_id='$category_id',image_name='$image', featured = '$featured', active = '$active'  where id='$food_id' ";
    $result1=mysqli_query($connection,$sql);
     if($result1){
         echo"<script> alert('Data Updated Successfully');</script>";
         header('location:manage-food.php');
     }
     else{
         echo"<script> alert('Something Wrong Happened');</script>";
     }
}

?>




<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>

        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                <form method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ;?>" >
                    <div class="form-group">
                      <label for="">Title :</label>
                      <input type="text" class="form-control" value="<?php echo $row['title'] ;?>" placeholder="Enter Title " name="title">
                    </div>
                     <div class="form-group">
                      <label for="">Description :</label>
                      <input type="text" class="form-control" value="<?php echo $row['description'] ;?>" placeholder="Enter Description " name="description">
                    </div> 
                    <div class="form-group">
                      <label for="">Price :</label>
                      <input type="text" class="form-control" value="<?php echo $row['price'] ;?>" placeholder="Enter Price " name="price">
                    </div>
                     <div class="form-group">
                      <label for="">Image :</label>
                      <img width="100px" src="<?php echo $row['image_name'] ;?>" alt="">
                      <input type="file" class="form-control" value="<?php echo $row['image_name'] ;?>" placeholder="Enter Title " name="image">
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
                           while($row1=mysqli_fetch_array($result))
                           {
                            //    get all the values 
                            $id =$row1['id'];
                            $title =$row1['title'];
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
                      <input <?php if($row['featured']=="Yes"){echo"checked";} ?> type="Radio"  id="" name="featured" value="Yes"> Yes
                      <input <?php if($row['featured']=="No"){echo"checked";} ?> type="Radio"  id="" name="featured" value="No"> No
                    </div>
                    <div class="form-group">
                      <label for="">Active</label>
                      <input <?php if($row['active']=="Yes"){echo"checked";} ?> type="radio" id=""  name="active" value="Yes"> Yes
                      <input <?php if($row['active']=="No"){echo"checked";} ?> type="radio" id=""  name="active" value="No"> No
                    </div>
                    <input type="submit" class="btn btn-info" value="Update Category" name="Submit">
                    
                </form>
                </div>
           
            </div>
        </div>



    </div>
</div>





<?php include("../admin/include/footer.php"); ?>



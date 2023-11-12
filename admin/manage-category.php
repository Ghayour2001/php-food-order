<?php  include "include/menu.php" ?>
<?php include('../config/connection.php');   //Database Connection ?>


    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Category</h1>
            <br>
    <!-- Button to add Admin -->
    <a href="add-cat.php" class="btn btn-primary">Add Category</a>
    <br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Featured</th>
      <th scope="col">Active</th>
      <th scope="col">Update | Delete</th>
      
    </tr>

  <?php    
      $sql="SELECT * FROM tbl_category ";
      $result=mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($result)){

     
  
  ?>

  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['title'] ?></td>
      <td><img width="100px" src="<?php echo $row['image_name'] ?>" alt="image-not found"></td>
      <td><?php echo $row['featured'] ?></td>
      <td><?php echo $row['active'] ?></td>
      
      <td> <a class="btn btn-info" href="update-cat.php?id=<?php echo $row["id"];?>">Update</a> 
         | <a class="btn btn-danger" href="delete-cat.php?id=<?php echo $row["id"]?>" onclick="return confirm('Are you sure to Delete the Data?');">Delete</a> </td>
    </tr>
  <?php  }  ?>
  </tbody>
  </table>


            
        </div>

    </div>
    <!-- Main Content Section Ends -->


    <?php 
    include "include/footer.php"
    ?>
<?php  include "include/menu.php" ?>
<?php include('../config/connection.php');   //Database Connection ?>


    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <br>
    <!-- Button to add Admin -->
    <a href="add_admin.php" class="btn btn-primary">Add Admin</a>
    <br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Update | Delete</th>
      
    </tr>

  <?php    
      $sql="SELECT * FROM tbl_admin ";
      $result=mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($result)){

     
  
  ?>

  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['full_name'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td> <a href="change-password.php?id=<?php echo $row["id"];?>" class="btn btn-warning" >Change Password</a> </td>
      <td> <a class="btn btn-info" href="update-admin.php?id=<?php echo $row["id"];?>">Update</a> 
         | <a class="btn btn-danger" href="delete-admin.php?id=<?php echo $row["id"]?>" onclick="return confirm('Are you sure to Delete the Data?');">Delete</a> </td>
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
<?php  include "include/menu.php" ?>
<?php include('../config/connection.php');   //Database Connection ?>


    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Complain</h1>
            <br>
    <!-- Button to add Admin -->
  
    <br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
   
      
    </tr>

  <?php    
      $sql="SELECT * FROM tbl_contact ";
      $result=mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($result)){

     
  
  ?>

  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['subject'] ?></td>
      <td><?php echo $row['message'] ?></td>
      
    
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
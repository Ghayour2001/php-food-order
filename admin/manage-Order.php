<?php  include "include/menu.php" ?>
<?php include('../config/connection.php');   //Database Connection ?>


    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="">
            <h1 class="ml-5 ">Manage Order</h1>
            <br>
   
   
    <br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Food</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Order_Date</th>
      <th scope="col">Status</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Contact</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>

  <?php    
      $sql="SELECT * FROM tbl_order ORDER BY id DESC ";
      $result=mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($result)){

     
  
  ?>

  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['food'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['qty'] ?></td>
      <td><?php echo $row['total'] ?></td>
      <td><?php echo $row['order_date'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td><?php echo $row['customer_name'] ?></td>
      <td><?php echo $row['customer_contact'] ?></td>
      <td><?php echo $row['customer_email'] ?></td>
      <td><?php echo $row['customer_address'] ?></td>
      
      <td> <a class="btn btn-info" href="update-order.php?id=<?php echo $row["id"];?>">Update</a>  </td>
      <td><a class="btn btn-danger" href="delete-order.php?id=<?php echo $row["id"]?>" onclick="return confirm('Are you sure to Delete the Data?');">Delete</a></td>
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
<?php include('../config/connection.php');   //Database Connection ?>
<?php include("../admin/include/menu.php"); ?>

<?php 
$food_id=$_REQUEST['id'];
$result=mysqli_query($connection,"SELECT * FROM tbl_order where id='$food_id'");
$row=mysqli_fetch_array($result);

// Query for Updation

if(isset($_POST["Submit"])){
    
    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $total = $price * $qty;

    $order_date = date("Y-m-d h:i:sa");

    $status =$_POST['status'];// Ordered, On delivery , Delivered, Cancelled

    $customer_name = $_POST['full-name'];
    $customer_contact = $_POST['contact'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];

    $sql2="UPDATE tbl_order SET
    food = '$food',
    price ='$price',
    qty = '$qty',
    total = '$total',
    order_date = '$order_date',
    status = '$status',
    customer_name = '$customer_name',
    customer_contact = '$customer_contact',
    customer_email = '$customer_email',
    customer_address = '$customer_address'
    WHERE id='$food_id'";

    //Execute the Query
    $result2=mysqli_query($connection,$sql2);
    if($result2)
    {
  
    echo"<script> alert('Updated Sucessfully');</script>";
    header("location:manage-order.php");
    } 
    else
    {
    
        echo"<script> alert('Something Wrong Happened');</script>";
        
    }
}

  

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Order</h1>

        <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                    
    
                    <div class="food-menu-desc">
                        <!-- <div class="order-label"> Title </div> -->
                        <td><strong><?php echo $row['food'] ?></strong></td>
                        <input type="hidden" name="food" class="form-control" value="<?php echo $row['food'] ?>" >

                        <div class="order-label"> Price </div>
                        <td> <strong><?php echo $row['price'] ?></strong></td>
                        <input type="hidden" name="price" class="form-control" value="<?php echo $row['price'] ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive form-control" value="<?php echo $row['qty'] ?>" required>
                        </div>
                        <div class="order-label">Status</div>
                        <td>
                            <select name="status" id="">
                                <option value="Ordered">Ordered</option>
                                <option value="On Delivery">On Delivery</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </td>
                
                   
                    
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Name" class="input-responsive form-control" value="<?php echo $row['customer_name'] ?>" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 03xxxxxxx" class="input-responsive form-control" value="<?php echo $row['customer_contact'] ?>" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. xxxxx@gmail.com" class="input-responsive form-control" value="<?php echo $row['customer_email'] ?>" required>

                    <div class="order-label">Address</div>
                    <input name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive form-control" value="<?php echo $row['customer_address'] ?>" required>
                    <br><br>
                    <input type="submit" name="Submit" value="Update Order" class="btn btn-primary">
                </fieldset>

            </form>

    </div>
</div>





<?php include("../admin/include/footer.php"); ?>



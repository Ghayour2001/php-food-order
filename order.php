<?php 
include("config/connection.php");
include("include-front/manu.php");
?>
    <?php 
    if(isset($_REQUEST['food_id']))
    {
        $food_id=$_REQUEST['food_id'];

        $sql="SELECT * FROM tbl_food WHERE id='$food_id'";
        $result=mysqli_query($connection,$sql);
        $count=mysqli_num_rows($result);

        if($count>0)
        {
            $row = mysqli_fetch_array($result);
        }
        else
        {
            echo "<script> Alert('Neshta Ror me khafa nashe') </script>";
        }

    }
    else
    {
    //   header("location:index.php");
    }


    ?>
            

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container text-white">

        
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                    <div class="food-menu-img">
                        <img src="admin/<?php echo $row['image_name'] ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $row['title'] ?></h3>
                        <input type="hidden" name="food" value="<?php echo $row['title'] ?>" >

                        <p class="food-price"><?php echo  $row['price'] ?></p>
                        <input type="hidden" name="price" value="<?php echo $row['price'] ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 03xxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. xxxxx@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            <?php 
                if(isset($_POST['submit']))
                {
                    // echo "hello";
                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty;

                    $order_date = date("Y-m-d h:i:sa");

                    $status ="Ordered"; // Ordered, On delivery , Delivered, Cancelled

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];

                    $sql2="INSERT INTO tbl_order SET
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
                    ";

                    //Execute the Query
                    $result2=mysqli_query($connection,$sql2);
                    if($result2)
                    {
                  
                    echo"<script> alert('Order Placed Sucessfully');</script>";
                    } 
                    else
                    {
                    
                        echo"<script> alert('Something Wrong Happened');</script>";
                        
                    }
                }

            ?>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   <?php include("include-front/footer.php"); ?>


<?php
include "../config/session.php";
include "../config/connection.php";


include "include/menu.php";


?>
    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1>
           
           <?php 
            $sql= "SELECT * FROM tbl_category";
            $result = mysqli_query($connection,$sql);
            $row= mysqli_num_rows($result);
            ?>

                   <a href="manage-category.php">
            <div class="col-md-4 text-center">
                <h1><?php echo $row?></h1>
                Categories
            </div>
            </a> 
            <?php 
            $sql1= "SELECT * FROM tbl_food";
            $result1 = mysqli_query($connection,$sql1);
            $row1= mysqli_num_rows($result1);
            ?>
            <a href="manage-food.php">
            <div class="col-md-4 text-center">
                <h1><?php echo $row1?></h1>
                Foods
            </div>
            </a>
            <?php 
            $sql2= "SELECT * FROM tbl_order";
            $result2 = mysqli_query($connection,$sql2);
            $row2= mysqli_num_rows($result2);
            ?>
            <a href="manage-Order.php">
            <div class="col-md-4 text-center">
                <h1><?php echo $row2?></h1>
                Total Orders
            </div>
            </a>
            <?php 
            $sql3= "SELECT  SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";
            $result3 = mysqli_query($connection,$sql3);
            $row3= mysqli_fetch_assoc($result3);
            $total_revenue=$row3['Total'];
            ?>
            <div class="col-md-4 text-center">
                <h1>$.<?php echo $total_revenue?></h1>
                
                Revenue Generated
                
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <!-- Main Content Section Ends -->


    <?php 
    include "include/footer.php";
    ?>
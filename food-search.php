<?php
include ("config/connection.php");
include ("include-front/manu.php");
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
             $search=$_POST['search'];
           
            //  $search=mysqli_real_escape_string($connection,htmlentities(trim(strip_tags($_POST['search']))));             

            ?>
            <h2>Foods on Your Search <a href="" class="text-white">"<?php echo " $search"; ?>"</a></h2>
            <!-- if search variable is empty go to index page  -->
           <?php if($search==0)
           {
               header('location:index.php');
           }
           ?>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

           <?php
            // $search=$_POST['search'];

            $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%' ";
            $result = mysqli_query($connection,$sql);
            $count=mysqli_num_rows($result);
            if($count>0)
            {
               while($row=mysqli_fetch_array($result))
               {
               $id= $row['id'];
               $title= $row['title'];
               $price= $row['price'];
               $description= $row['description'];
               $image= $row['image_name'];
                ?>    
  <div class="food-menu-box">
                <div class="">
                    <img src="admin/<?php echo "$image"; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo "$title"; ?></h4>
                    <p class="food-price"><?php echo "$price"?></p>
                    <p class="food-detail">
                    <?php echo " $description"?>
                    </p>
                    <br>

                    <a href="order.php?food_id=<?php echo $row['id']?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <?php
               }
            }
            else
            {
                echo "<script> alert('food not Available') </script> ";
            }
           ?> 

      


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php
include ("include-front/footer.php");
?>
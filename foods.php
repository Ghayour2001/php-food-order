<?php
include ("config/connection.php");
include ("include-front/manu.php");

?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <!-- <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
            // disply category from database 
            $select = "SELECT * FROM tbl_category WHERE active ='Yes' AND featured = 'Yes' LIMIT 3";
            $result =mysqli_query($connection,$select);
            $count=mysqli_num_rows($result);
            if($count>0)
            {
                while($row=mysqli_fetch_array($result))
                {
                    // $id = $row['id'];
                    // $title = $row['title'];
                    // $image = $row['image_name'];
                    ?>
            <a href="category-foods.php?category_id=<?php echo $row['id'] ?> ">
            <div class="box-3 float-container">
                <img src="admin/<?php echo $row['image_name']?>" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white"><?php echo $row['title'] ?></h3>
            </div>
            </a>


                    <?php

                }
            }
            else
            {
                echo "<script> alert('Category is not Avalible') </script>";
            }



            ?>

            

            
            <div class="clearfix"></div>
        </div>
    </section> -->
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
   
   $sql2= "SELECT * FROM tbl_food WHERE  featured='Yes'";
   $result2= mysqli_query($connection,$sql2);
   $count2=mysqli_num_rows($result2);
   if($count2>0)
   {
   while($row2=mysqli_fetch_array($result2))
   {
  
    ?>
  <div class="food-menu-box">
                <div class="food-menu-img">
                <img src="admin/<?php echo $row2['image_name']?>" alt="Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $row2['title'] ?></h4>
                    <p class="food-price"><?php echo $row2['price'] ?></p>
                    <p class="food-detail">
                    <?php echo $row2['description'] ?>
                    </p>
                    <br>

                    <a href="order.php?food_id=<?php echo $row2['id']?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

    <?php
   }



   }
   else
   {
    echo " <script>alert('food is not available')</script>"   ;
   }
   ?>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

   <?php
   include ("include-front/footer.php")
   ?>
<?php
include ("config/connection.php");
include ("include-front/manu.php");
?>
<?php

              
       

        if(isset($_GET["category_id"])){
            
            $cat_id=$_REQUEST['category_id'];

        $sql = "SELECT title FROM tbl_category WHERE id= '$cat_id'";
        $result=mysqli_query($connection,$sql);
        $row= mysqli_fetch_array($result);
        $category_title = $row['title'];

        }
        else{
            $sql = "SELECT title FROM tbl_category ";
            $result=mysqli_query($connection,$sql);
            $row= mysqli_fetch_array($result);
            $category_title = ""; 
        }


?>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on <a href="#" class="text-white">"<?php echo "  $category_title " ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
   <?php
   if(isset($_GET["category_id"])){
   
   $sql2= "SELECT * FROM tbl_food WHERE category_id=$cat_id";
   }
   else
   {
    $sql2= "SELECT * FROM tbl_food ";   
   }
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
                    <h4><?php echo  $row2['title'] ?></h4>
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

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php
include ("include-front/footer.php");
?>
<?php
include ("config/connection.php");
include ("include-front/manu.php");
?>
    


    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <?php
            // disply category from database 
            $select = "SELECT * FROM tbl_category WHERE active ='Yes' ";
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
                  <a href="category-foods.php?category_id=<?php echo $row['id'] ?>">
            <div class="box-3 float-container">
                <img src="admin/<?php echo $row['image_name']?>" alt="img  not found" class="img-responsive img-curve">

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
    </section>
    <!-- Categories Section Ends Here -->

    <?php
include ("include-front/footer.php");
?>
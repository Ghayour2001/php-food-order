<?php

   //SESSION

    //Create Constant to Store NON REPEATING VALUES
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food-order');


   $connection = mysqli_connect( LOCALHOST , DB_USERNAME , DB_PASSWORD, DB_NAME ) or die(mysqli_connect_error());  //Database connection

   // $db_select=mysqli_select_db($connection, 'food-order') or die(mysqli_connect_error());   //Selecting Database
  

  

?>
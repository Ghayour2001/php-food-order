<?php
require_once '../config/connection.php';

$food_id=$_REQUEST['id'];
$sql="DELETE FROM tbl_food where id='$food_id'";
$result=mysqli_query($connection,$sql);

if($result){
    echo"<script> alert('Data Delete Successfully');</script>";
    header('location:manage-food.php');
    
}
else{
    
    echo"<script> alert('Something wrong happend');</script>";
}

?>
<script>location.replace("manage-category.php")</script>
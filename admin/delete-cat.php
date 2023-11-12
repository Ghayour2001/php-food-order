<?php
require_once '../config/connection.php';

$cat_id=$_REQUEST['id'];
$sql="DELETE FROM tbl_category where id='$cat_id'";
$result=mysqli_query($connection,$sql);

if($result){
    echo"<script> alert('Data Delete Successfully');</script>";
    // header('location:manage-admin.php');
    
}
else{
    
    echo"<script> alert('Something wrong happend');</script>";
}

?>
<script>location.replace("manage-category.php")</script>
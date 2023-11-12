<?php
require_once '../config/connection.php';

$order_id=$_REQUEST['id'];
$sql="DELETE FROM tbl_order where id='$order_id'";
$result=mysqli_query($connection,$sql);

if($result){
    echo"<script> alert('Data Delete Successfully');</script>";
    header('location:manage-order.php');
    
}
else{
    
    echo"<script> alert('Something wrong happend');</script>";
}

?>
<script>location.replace("manage-order.php")</script>
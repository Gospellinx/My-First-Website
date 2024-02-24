<?php
include('config2020/linx.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM photos.contact WHERE id=$id"; 
$result = mysqli_query($handle_event,$query) or die ( mysqli_error());
header("Location: viewadmin.php"); 
 
?>
<?php
require_once 'config.php';
// sql to delete a reference
$ID = $_GET["ID"];		
$sql = "DELETE FROM request WHERE ID= '$ID'";
$data=mysqli_query($conn,$sql);
$message="Deleted the Request Successfully";
if ($data) {
    
 echo  "<script>alert('$message');window.location.href = 'view_requests.php';</script>";
   
} else {
     echo "<script>alert('error deleting row');window.location.href = 'view_requests.php';</script>" ;
}
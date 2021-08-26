<?php   

include("config.php");

$del = $_GET['del'];
$query = mysqli_query($conn,"delete from signin_data where email='$del' ");

if($query){
    
    echo "<script>alert('Record have been delered')</script>";
    header("Location:customer.php");
}
  


?>
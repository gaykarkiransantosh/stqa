<?php   

include("config.php");

$del = $_GET['del'];
$query = mysqli_query($conn,"delete from all_internships where id='$del' ");

if($query){
    echo "<script>alert('Record has been delered')</script>";
    header("Location:allinternships.php");
}
  


?>
<?php   

include("config.php");

$del = $_GET['del'];
$query = mysqli_query($conn,"delete from teachers_signin where email_id='$del' ");

if($query){
    echo "<script>alert('Record have been delered')</script>";
    header("Location:jobgiver.php");
}
  


?>
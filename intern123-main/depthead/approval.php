<?php
    include("config.php");
    $id = $_GET['edit'];
    $query2 = mysqli_query($conn, "UPDATE ico1 SET status='approved' WHERE id='$id'");
    if($query2){
        echo "<script>alert('Data Updated Successfully');</script>";
    }
    header('location:deptheaddash.php');
?>
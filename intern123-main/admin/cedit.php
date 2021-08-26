
<?php   


include("config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $username = $_POST['username'];
         $password = $_POST['userpass'];
         $branch = $_POST['branch'];
         $rollnum = $_POST['rollnum'];
         $dob = $_POST['dob'];
         $email = $_POST['email'];
         $pno = $_POST['pno'];
         $address = $_POST['address'];
      
    
    
   

    $query = mysqli_query($conn, "update signin_data set fname='$fname',lname='$lname',username='$username', userpass='$password', branch='$branch', rollnum='$rollnum', dob='$dob', email='$email' , pno='$pno' , address='$address' where email='$id'");

    if($query){
        echo "<script>alert('Record Updated')</script>";
        header("Location: customer.php");
       
    }else{
        echo "<script>alert('Try again')</script>";
       
    }
}

?>
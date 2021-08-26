
<?php   


include("config.php");


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = mysqli_query($conn, "INSERT INTO contact_enquiry (enquiry_from, enquiry_email, enquiry_subject, enquiry_mssg) VALUES ('$name','$email','$subject','$message')");

    if($query){
        echo "<script>alert('Message Sent!');</script>";
        
        
        header("Location: home.php");
       
    }else{
        echo "<script>alert('Try again')</script>";
       
    }
}

?>
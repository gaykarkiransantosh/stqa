
<?php   


include("config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['userpass'];
    $branch = $_POST['branch'];
    $faculty_num = $_POST['faculty_num'];
    $dob = $_POST['dob'];
    $email = $_POST['email_id'];
    $pno = $_POST['pno'];
    $working_addr = $_POST['working_addr'];
    $position = $_POST['position'];
 
    
    
   

    $query = mysqli_query($conn, "update teachers_signin set fname='$fname',lname='$lname',username='$username', userpass='$password', branch='$branch', faculty_num='$faculty_num', dob='$dob', email_id='$email' , pno='$pno' , working_addr='$working_addr', position='$position' where email_id='$id'");
    $query2 = mysqli_query($conn, "UPDATE all_internships SET email_id='$email' ,branch = '$branch' WHERE  email_id='$id'");
    if($query && $query2){
        echo "<script>alert('Record Updated');</script>";
        header("Location: teacher.php");
       
    }else{
        echo "<script>alert('Try again');</script>";
       
    }
}

?>
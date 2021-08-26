
<?php   


include("config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $email_id = $_POST['email_id'];
    $internship_title = $_POST['internship_title'];
    $des = $_POST['des'];
    $branch = $_POST['branch'];
    $apply_date = $_POST['apply_date'];
    $query = mysqli_query($conn, "update all_internships set id = '$id',email_id='$email_id', internship_title='$internship_title', des='$des', branch='$branch',apply_date='$apply_date' where id='$id'");

    if($query){
        
        header("Location: allinternships.php");
       
    }else{
        echo "<script>alert('Try again')</script>";
       
    }
}

?>
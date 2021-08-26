<?php   
  include("config.php");

  $email_id = $_POST['email_id'];
  $internship_title = $_POST['internship_title'];
  $des = $_POST['des'];
  $branch = $_POST['branch'];
  $apply_date = $_POST['apply_date'];


  $query = mysqli_query($conn, "insert into all_internships(email_id,internship_title,des,branch,apply_date)values('$email_id','$internship_title','$des','$branch','$apply_date')");

  if($query){
      echo "Data Inserted Successfully";
      header("Location: allinternships.php");
  }
  ?>
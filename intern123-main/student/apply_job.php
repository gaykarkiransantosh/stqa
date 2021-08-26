<?php
  include("config.php");

  if(
      isset($_POST['submit'])){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $sem = $_POST['sem'];
          $file = $_FILES['file']['name'];

          $tmp_name = $_FILES['file']['tmp_name'];
          $id = $_POST['id'];
          $job_seeker = $_POST['job_seeker'];

        move_uploaded_file($_FILES['file']['tmp_name'],'../resumes/'.$file);
        $query1 = mysqli_query($conn,"SELECT num_of_internships FROM signin_data WHERE email = '$job_seeker'");
        $det = mysqli_fetch_array($query1);
        $noi = $det['num_of_internships'];
        if($noi <= 5){
          $query = mysqli_query($conn, "insert into internship_apply(fname,lname,sem,file,int_id,applicant_email) values ('$fname','$lname','$sem','$file','$id','$job_seeker')");
          $query2 = mysqli_query($conn,"UPDATE signin_data SET num_of_internships = num_of_internships+1 WHERE email = '$job_seeker'");
  
          if($query && $query2){
            header("Location: studentdashboard.php");
  
          }else{
              echo "not";
          }
        }
        else{
          echo"<script>alert('YOU CANNOT APPLY FOR MORE THAN 5 INTERNSHIPS IN A MONTH!!');</script>";
        }
       

      }
  
?>
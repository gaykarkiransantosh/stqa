<?php    
 
 use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
  $student_email = $_POST['to'];
  $teacher_email = $_POST['from'];
  //$user = $_SESSION['username'];
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $des = $_POST['des'];
  $int_tit = $_POST['intt'];
  //$subject = $_POST['subject'];
  $message = $_POST['body'];
  $from = "shopex247@gmail.com";
  $headers = "From: $from";

  include("config.php");
  $query = mysqli_query($conn, "INSERT INTO accepted_applicants(int_id, fname, lname, applicant_email,provider_email,intern_details) VALUES ('$id','$fname','$lname','$student_email','$teacher_email','$des')");
  $query2 = mysqli_query($conn, "UPDATE internship_apply SET status='Accept' WHERE applicant_email='$student_email'");
  if($query && $query2){
      echo "<script>alert('Data Inserted Successfully');</script>";
  }

  require_once "../PHPMailer/PHPMailer.php";
  require_once "../PHPMailer/SMTP.php";
  require_once "../PHPMailer/Exception.php";

  $mail = new PHPMailer(true);
try{
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "shopex247@gmailcom";
  $mail->Password = "localshoppe247";
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->setFrom($from,"Intern123");
  $mail->addAddress($student_email);
  $mail->Subject = ("Internship Status Update:$id-$int_tit");
  $mail->Body = ("Internship Provider:$teacher_email,Message:$message");
  $mail->send();
  echo "<script>alert('Mail has been sent successfully');</script>";

  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  
  /*if(){
    $status = "success";
    $response = "Email is sent";
  }
  else{
    $status = "failed";
    $response = "Something is wrong: <br>". $mail->ErrorInfo;
  }*/

  //exit(json_encode(array("status" => $status, "response" => $response)));



}



?>

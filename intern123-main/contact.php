<?php    
 
 use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from = "shopex247@gmail.com";
  $headers = "From: $from";

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer(true);
try{
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "shopex247@gmail.com";
  $mail->Password = "localshoppe247";
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->setFrom($email,"Intern123");
  $mail->addAddress("shopex247@gmail.com");
  $mail->Subject = ("$subject");
  $mail->Body = ("Enquiry:$message,Name of sender:$name,Email address of:$email");
  $mail->send();
  echo 'Message has been sent';
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

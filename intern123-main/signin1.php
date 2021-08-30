<?php 
  // session_id('intern123');
  //session_name('intern123');
  session_start();
  include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN IN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="signin1.css">
  <link rel="stylesheet" type="text/css" href="newteachersignin.css">
</head>
<?php
    $fnameError = $fname = $lnameError = $lname = $rollError = $rollNum = $mailError = $email = $phoneError = $phoneNum = $genderError = $gender = $branchError = $branch = $userError = $user = $passError = $pass = $cpassError = $cpass = $dateError = $date = $addrError = $address = $checkError = $check = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["fname"])){
            $fnameError = "Please enter your first name.";
        } elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["fname"])){
            $fnameError = "Enter correct name in characters only.";
        }
        else{
            $fname = $_POST["fname"];
        } 
        if(empty($_POST["lname"])){
            $lnameError = "Please enter your last name.";
        } elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["lname"])){
            $lnameError = "Enter correct name in characters only.";
        }
        else{
            $lname = $_POST["lname"];
        } 
        if(empty($_POST["branch"])){
          $branchError = "Please enter your branch.";
        }
        else{
            $branch = $_POST["branch"];
        } 
        if(empty($_POST["rnum"])){
            $rollError = "Please enter your roll number.";
        } elseif(strlen($_POST['rnum']) != 7){
          $rollError = "Please enter your correct 7 digit roll number.";
        }  
        elseif(!preg_match("/^[0-9]*$/",$_POST['rnum'])){
            $rollError = "Please enter your correct roll number.";
        }
        else{
            $rollNum = $_POST["rnum"];
        }
        if(empty($_POST['dt'])){
          $dateError = "Please enter DOB.";
        }
        #$dateOfBirth = $_POST['dt'];
        #$today = date("Y-m-d");
        #$diff = date_diff(date_create($_POST['dt']), date_create(date("Y-m-d")));
        elseif(date_diff(date_create($_POST['dt']), date_create(date("Y-m-d")))->format('%y%') < 17){
          $dateError = "You are too young to register.";
        }
        else{
          $date = $_POST['dt'];
        } 
        if(empty($_POST["email"])){
            $mailError = "Please enter your email address.";
        } elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $mailError = "Inavlid email format.";
        }
        else{
            $email = $_POST["email"];
        }
        if(empty($_POST["addr"])){
          $addrError = "Please enter your address.";
        }
        else{
            $address = $_POST["addr"];
        }
        if(empty($_POST["phonenum"])){
            $phoneError = "Please enter your number.";
        } elseif(!preg_match("/^[0-9]*$/",$_POST['phonenum'])){
            $phoneError = "Please enter your correct phone number.";
        } elseif(strlen($_POST['phonenum']) != 10 ){
            $phoneError = "Please enter your correct phone number with proper format.";
        }
        else{
            $phoneNum = $_POST["phonenum"];
        } 
        if(empty($_POST["gender"])) {
            $genderError = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }
        if(empty($_POST["username"])) {
          $userError = "Username is required";
        } else {
          $user = $_POST["username"];
        }
        if(empty($_POST["password"])) {
          $passError = "Password is required";
        }elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$_POST['password'])){
          $passError = "Correct format password with atleast one capital letter,number and consisting of atleast 8 characters is required";
        } 
        
        else {
          $pass = $_POST["password"];
        }
        if(empty($_POST["cpass"])) {
          $cpassError = "Password is required";
        }elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$_POST['cpass'])){
          $cpassError = "Correct format password with atleast one capital letter,number and consisting of atleast 8 characters is required";
        } 
        elseif($_POST["cpass"] != $_POST["password"]) {
          $cpassError = "Confirmed password is not the same. Please try again";
        }
        else {
          $cpass = $_POST["cpass"];
        }
        if (empty($_POST['agree'])) {
          $checkError = "Please check the box to continue signin.";
        }
        else{
          $check = "checked";
        }
        if(empty($fnameError) && empty($lnameError) && empty($branchError) && empty($rollError) && empty($dateError) && empty($addrError) && empty($mailError) && empty($phoneError) && empty($genderError) && empty($userError) && empty($passError) && empty($cpassError) && empty($checkError))
        {
            #INSERT INTO `signin_data`(`fname`, `lname`, `username`, `userpass`, `branch`, `rollnum`, `dob`, `email`, `pno`, `gender`, `address`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
            include_once 'config.php';
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $branch = $_POST['branch'];
            $rollNum = $_POST['rnum'];
            $date = $_POST['dt'];
            $email = $_POST['email'];
            $phoneNum = $_POST['phonenum'];
            $gender = $_POST['gender'];
            $address = $_POST['addr'];
            $_SESSION['username'] = $_POST['username'];



            /*$sql= "insert into users (username , password ) values (?,?);";
            $stmt = mysqli_prepare($conn , $sql);
            if($stmt){
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

              //set parameter
              $param_username= $username;

              $param_password= password_hash($password,PASSWORD_DEFAULT);

              //EXECUTE QUERY
              if(mysqli_stmt_execute($stmt)){

                header("Location: customer.php");
              }else{
                  echo "something went wrong";
              }
                
            }
            mysqli_stmt_close($stmt);*/









            $sql = "INSERT INTO signin_data (fname, lname, username, userpass, branch, rollnum, dob, email, pno, gender, address) VALUES ('$fname','$lname','$user','$pass','$branch','$rollNum','$date','$email','$phoneNum','$gender','$address');";
            $sql_2 = "INSERT INTO login_data (username, userpass, user_type) VALUES ('$user','$pass','student');";
            /*$sql = "INSERT INTO login_data (username,userpass) VALUES(?,?);";
            $pst = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($pst,"ss",$username,$userpass);
            mysqli_stmt_execute($pst);
            $getResult = mysqli_stmt_get_result($pst);
            $rows = mysqli_fetch_assoc($getResult);*/
            if(mysqli_query($conn,$sql) and mysqli_query($conn,$sql_2)){
              echo "Data inserted";
              #header('Location: index.php?username='.$username);
              header("Location:../student/studentdashboard.php?fname=".$fname."&lname=".$lname."&username=".$user);
            }  
            else{
                echo "INVALID QUERY! Error in sign in";
            }
        }
          #header("Location: index.php?fname=".$fname."&lname=".$lname."&username=".$user);
    }
     
?>
<body>
  <div class="wrapper">
     <form  method="POST" class="form1">
     <p class="text-center" style="font-size:2rem"><b>SIGN IN</b></p>
    <center><H3>Already signed in? <a href="login.html">CLICK TO CONTINUE</a></H3></center>
   <br>
   <hr>
   <br>
    <div class="row">
    <div class="form-group col-md-6">
<div class="input_field">
    <label for="fname">First Name:</label>
    <input type="text" class="form-control" id="fname" class="from-control" name="fname">
    <div class="error_message">* <?php echo $fnameError;?></div>
    </div>
    </div>
    <div class="form-group col-md-6">
    <label for="lname">Last Name:</label>
    <div class="input_field">
  
    <input type="text" class="form-control" id="lname" name="lname">
    <div class="error_message">* <?php echo $lnameError;?></div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
    <label for="username">Username:</label>
    <div class="input_field">
      <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME">
      <div class="error_message">* <?php echo $userError;?></div>
    </div>
  </div>
  <div class="form-group col-md-6">
    <div class="input_field">
    <label for="email">Email Id:</label>
    <input type="text" class="form-control" id="email" name="email">
    <div class="error_message">* <?php echo $mailError;?></div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
    <label for="password">Password:</label>
    <div class="input_field">
      <input type="password" class="form-control" name="password" id="password" placeholder="PASSWORD">
      <div class="error_message">* <?php echo $passError;?></div>
    </div>
    </div>
  
    <div class="form-group col-md-6">
    <label for="cpass">Confirm Password:</label>
    <div class="input_field">
      <input type="password" class="form-control" name="cpass" id="cpass" placeholder="CONFIRM PASSWORD">
      <div class="error_message">* <?php echo $cpassError;?></div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
    <div class="input_field">
    <label for="branch">Branch:</label>
    
      <select class="sel form-control" name="branch" id="branch">
        <option selected disabled value="">Select one</option>
        <option value="COMPS">Computer Engineering</option>
        <option value="ETRX">Electronics Engineering</option>
        <option value="EXTC">Electronics and Telecommunications Engineering</option>
        <option value="IT">Information Technology</option>
        <option value="MECH">Mechanical Engineering</option>
        <option value="S&H">Science and Humanities</option>
      </select>
      <div class="error_message">* <?php echo $branchError;?></div>
      </div>
      </div>
      <div class="form-group col-md-6">
    <div class="input_field">
    <label for="rnum">Roll number:</label>
    <input type="text" class="form-control"  id="rnum" name="rnum">
    <div class="error_message">* <?php echo $rollError;?></div>
    </div>  </div>  </div>
    <div class="row">
    <div class="form-group col-md-6">
    <div class="input_field">
    <label for="dt">Enter date of birth:</label>
    <input type="date" class="form-control" id="dt" name="dt"></input>
    <div class="error_message">* <?php echo $dateError;?></div>
    </div>
    </div>
    <div class="form-group col-md-6">
    <div class="input_field">
    <label for="phonenum">Phone Number:</label>
    <input type="text" class="form-control" id="phonenum" name="phonenum">
    <div class="error_message">* <?php echo $phoneError;?></div>
    </div>
    </div></div>
    <div class="input_field">
    <label for="gender">Gender:</label>
    <label for="female">Female<input form-check form-check-inline  type="radio" name="gender" value="female" id="female"></label>
    <label for="male">Male<input form-check form-check-inline  type="radio" name="gender" value="male" id="male"></label>
    <label for="other">Other<input form-check form-check-inline  type="radio" name="gender" value="other" id="other"></label>
    <div class="error_message">* <?php echo $genderError;?></div>
    </div>
    <div class="form-group col-md-6">
    <div class="input_field">
      <label for="addr">Address:</label>
      <input type="text" class="form-control" id="addr" name="addr">
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea>-->
      <span class="error">* <?php echo $addrError;?></span>
    </div>
      
    <div class="form-check ">
    <input type="checkbox" class="form-check-input" id="agree" name="agree" value="agree">
    <label for="agree"> I agree with terms & conditions</label>
    <div class="error_message">* <?php echo $checkError;?></div></div>
   
      <button type="submit" class="btn btn-primary"> SIGN IN</button> 
   <br>   <br>
   <p class="text-center" style="font-size:1.5 rem">YOU ARE ONE CLICK AWAY FROM YOUR DREAM INTERNSHIPS</p>

    </form>
  </div>
  <br>
  <br>
</body>
</html>

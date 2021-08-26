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
  <link rel="stylesheet" type="text/css" href="signin1.css">
</head>
<?php
    $fnameError = $fname = $lnameError = $lname = $rollError = $rollNum = $mailError = $email = $phoneError = $phoneNum = $genderError = $gender = $branchError = $branch = $userError = $user = $passError = $pass = $cpassError = $cpass = $dateError = $date = $addrError = $address = $checkError = $check = $positionError = $position = $workingAddrError = $workingAddr = "";
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
        if(empty($_POST["factnum"])){
            $rollError = "Please enter your faculty number.";
        } elseif(strlen($_POST['factnum']) != 7){
          $rollError = "Please enter your correct 7 digit faculty number.";
        }  
        elseif(!preg_match("/^[0-9]*$/",$_POST['factnum'])){
            $rollError = "Please enter your correct faculty number.";
        }
        else{
            $factNum = $_POST["factnum"];
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
        if(empty($fnameError) && empty($lnameError) && empty($branchError) && empty($rollError) && empty($dateError) && empty($addrError) && empty($mailError) && empty($phoneError) && empty($genderError) && empty($userError) && empty($passError) && empty($cpassError) && empty($checkError) && empty($positionError) && empty($workingAddrError))
        {
            #INSERT INTO `signin_data`(`fname`, `lname`, `username`, `userpass`, `branch`, `rollnum`, `dob`, `email`, `pno`, `gender`, `address`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
            include_once 'config.php';
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $branch = $_POST['branch'];
            $factNum = $_POST['factnum'];
            $date = $_POST['dt'];
            $email = $_POST['email'];
            $phoneNum = $_POST['phonenum'];
            $gender = $_POST['gender'];
            $address = $_POST['addr'];
            $position = $_POST['position'];
            $workingAddr = $_POST['addr'];
            $_SESSION['username'] = $_POST['username'];
            $sql = "INSERT INTO teachers_signin(fname, lname, username, userpass, position, branch, faculty_num, dob, email_id, pno, gender, working_addr) VALUES ('$fname','$lname','$user','$pass','$position','$branch','$factNum','$date','$email','$phoneNum','$gender','$workingAddr');";  
            $sql_2 = "INSERT INTO login_data (username, userpass, user_type) VALUES ('$user','$pass','teacher');";
            /*$sql = "INSERT INTO login_data (username,userpass) VALUES(?,?);";
            $pst = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($pst,"ss",$username,$userpass);
            mysqli_stmt_execute($pst);
            $getResult = mysqli_stmt_get_result($pst);
            $rows = mysqli_fetch_assoc($getResult);*/
            if(mysqli_query($conn,$sql) and mysqli_query($conn,$sql_2)){
              echo "Data inserted";
              #header('Location: index.php?username='.$username);
              header("Location: index.php?fname=".$fname."&lname=".$lname."&username=".$user);
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
    <h1>SIGN IN</h1><br>
    <center><H3>Already signed in? <a href="login.html">CLICK TO CONTINUE</a></H3></center><br>
    <form  method="POST">
    <div class="input_field">
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <div class="error_message">* <?php echo $fnameError;?></div><br>
    </div>
    <div class="input_field">
    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <div class="error_message">* <?php echo $lnameError;?></div><br>
    </div>
    <label for="username">Username:</label><br>
    <div class="input_field">
      <input type="text" name="username" id="username" placeholder="USERNAME">
      <div class="error_message">* <?php echo $userError;?></div>
    </div><br>
    <label for="password">Password:</label><br>
    <div class="input_field">
      <input type="password" name="password" id="password" placeholder="PASSWORD">
      <div class="error_message">* <?php echo $passError;?></div>
    </div><br>
    <label for="cpass">Confirm Password:</label><br>
    <div class="input_field">
      <input type="password" name="cpass" id="cpass" placeholder="CONFIRM PASSWORD">
      <div class="error_message">* <?php echo $cpassError;?></div>
    </div><br>
    <div class="input_field">
        <label for="postition">Postition:</label><br><br>
        <select class="sel" name="position" id="position">
            <option selected disabled value="">Select one</option>
            <option value="assnprof">Assistant Professor</option>
            <option value="assocprof">Associate Professor</option>
            <option value="prof">Professor</option>
            <option value="pricipal">Principal</option>
            <option value="visitfact">Visiting Faculty</option>
        </select>
        <div class="error_message">* <?php echo $positionError;?></div><br>
    </div><br>
    <div class="input_field">
        <label for="branch">Branch:</label><br><br>
        <select class="sel" name="branch" id="branch">
            <option selected disabled value="">Select one</option>
            <option value="COMPS">Computer Engineering</option>
            <option value="ETRX">Electronics Engineering</option>
            <option value="EXTC">Electronics and Telecommunications Engineering</option>
            <option value="IT">Information Technology</option>
            <option value="MECH">Mechanical Engineering</option>
            <option value="S&H">Science and Humanities</option>
        </select>
        <div class="error_message">* <?php echo $branchError;?></div><br>
    </div><br>
    <div class="input_field">
    <label for="factnum">Faculty number:</label><br>
    <input type="text" id="factnum" name="factnum"><br>
    <div class="error_message">* <?php echo $rollError;?></div><br>
    </div>
    <div class="input_field">
    <label for="dt">Enter date of birth:</label><br>
    <input type="date" id="dt" name="dt"></input><br>
    <span class="error">* <?php echo $dateError;?></span><br>
    </div>
    <div class="input_field">
    <label for="email">Email Id:</label><br>
    <input type="text" id="email" name="email"><br>
    <div class="error_message">* <?php echo $mailError;?></div><br>
    </div>
    <div class="input_field">
    <label for="phonenum">Phone Number:</label><br>
    <input type="text" id="phonenum" name="phonenum"><br>
    <div class="error_message">* <?php echo $phoneError;?></div><br>
    </div>
    <div class="input_field">
    <label for="gender">Gender:</label><br>
    <label for="female">Female<input type="radio" name="gender" value="female" id="female"></label><br><br>
    <label for="male">Male<input type="radio" name="gender" value="male" id="male"></label><br><br>
    <label for="other">Other<input type="radio" name="gender" value="other" id="other"></label><br><br>
    <div class="error_message">* <?php echo $genderError;?></div><br>
    </div>
    <div class="text_field">
      <label for="addr">Working address:</label><br>
      <input type="text" id="addr" name="addr"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">*<?php echo $workingAddrError;?></span><br><br>
    </div>
    <input type="checkbox" id="agree" name="agree" value="agree">
    <label for="agree"> I agree with terms & conditions</label><br>
    <div class="error_message">* <?php echo $checkError;?></div><br>
    <div class="btn">
      <button type="submit"> SIGN IN</button> 
    </div>
    <br><br><center><h6>YOU ARE ONE CLICK AWAY FROM PROVIDING YOUR DREAM INTERNSHIPS TO STUDENTS</h3></center>

    </form>
  </div>
</body>
</html>
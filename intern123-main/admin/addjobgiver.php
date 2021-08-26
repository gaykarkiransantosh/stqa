<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
<?php
    $fnameError = $fname = $lnameError = $lname = $rollError = $rollNum = $mailError = $email = $phoneError = $phoneNum = $genderError = $gender = $branchError = $branch = $userError = $user = $passError = $pass = $cpassError = $cpass = $dateError = $date = $addrError = $address = $positionError = $position = $workingAddrError = $workingAddr = "";
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
        if(empty($fnameError) && empty($lnameError) && empty($branchError) && empty($rollError) && empty($dateError) && empty($addrError) && empty($mailError) && empty($phoneError) && empty($genderError) && empty($userError) && empty($passError) && empty($cpassError) && empty($positionError) && empty($workingAddrError))
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
              header("Location:jobgiver.php");
            }  
            else{
                echo "INVALID QUERY! Error in adding new job giver!!";
            }
        }
          #header("Location: index.php?fname=".$fname."&lname=".$lname."&username=".$user);
    }
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="customer.php">Job Giver</a></li>
                 <li class="breadcrumb-item"><a href="#">Add Job Giver</a></li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2"> Add Job Giver </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>

             <div>
                <form method="POST">
                <div class="form-group">
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname" class="form-control"><br>
                <div class="error_message">* <?php echo $fnameError;?></div><br>
                </div>
                <div class="form-group">
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname" class="form-control"><br>
                <div class="error_message">* <?php echo $lnameError;?></div><br>
                </div>
                <label for="username">Username:</label><br>
                <div class="form-group">
                  <input type="text" name="username" id="username" placeholder="USERNAME" class="form-control">
                  <div class="error_message">* <?php echo $userError;?></div>
                </div><br>
                <label for="password">Password:</label><br>
                <div class="form-group">
                  <input type="password" name="password" id="password" placeholder="PASSWORD" class="form-control">
                  <div class="error_message">* <?php echo $passError;?></div>
                </div><br>
                <label for="cpass">Confirm Password:</label><br>
                <div class="form-group">
                  <input type="password" name="cpass" id="cpass" placeholder="CONFIRM PASSWORD" class="form-control">
                  <div class="error_message">* <?php echo $cpassError;?></div>
                </div><br>
                <div class="form-group">
                    <label for="postition">Postition:</label><br><br>
                    <select class="form-control" name="position" id="position">
                        <option selected disabled value="">Select one</option>
                        <option value="assnprof">Assistant Professor</option>
                        <option value="assocprof">Associate Professor</option>
                        <option value="prof">Professor</option>
                        <option value="pricipal">Principal</option>
                        <option value="visitfact">Visiting Faculty</option>
                    </select>
                    <div class="error_message">* <?php echo $positionError;?></div><br>
                </div><br>
                <div class="form-group">
                    <label for="branch">Branch:</label><br><br>
                    <select class="form-control" name="branch" id="branch">
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
                <div class="form-group">
                <label for="factnum">Faculty number:</label><br>
                <input type="text" id="factnum" name="factnum" class="form-control"><br>
                <div class="error_message">* <?php echo $rollError;?></div><br>
                </div>
                <div class="form-group">
                <label for="dt">Enter date of birth:</label><br>
                <input type="date" id="dt" name="dt" class="form-control"></input><br>
                <span class="error">* <?php echo $dateError;?></span><br>
                </div>
                <div class="form-group">
                <label for="email">Email Id:</label><br>
                <input type="text" id="email" name="email" class="form-control"><br>
                <div class="error_message">* <?php echo $mailError;?></div><br>
                </div>
                <div class="form-group">
                <label for="phonenum">Phone Number:</label><br>
                <input type="text" id="phonenum" name="phonenum" class="form-control"><br>
                <div class="error_message">* <?php echo $phoneError;?></div><br>
                </div>
                <div class="form-group">
                <label for="gender">Gender:</label><br>
                <label for="female">Female<input type="radio" name="gender" value="female" id="female"></label><br><br>
                <label for="male">Male<input type="radio" name="gender" value="male" id="male"></label><br><br>
                <label for="other">Other<input type="radio" name="gender" value="other" id="other"></label><br><br>
                <div class="error_message">* <?php echo $genderError;?></div><br>
                </div>
                <div class="form-group">
                  <label for="addr">Working address:</label><br>
                  <input type="text" id="addr" name="addr" class="form-control"><br>
                  <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
                  <span class="error">*<?php echo $workingAddrError;?></span><br><br>
                </div>
                <div class="form-group">
                  <label for="password"></label>
                  <input type="submit"  class="btn btn-success" placeholder="SAVE">
                </div>
                     <!--<div class="form-group">
                       <label for="username1"></label>
                       <input type="text" name="username1" class="form-control" placeholder="Enter First name">
                     </div>
                     <div class="form-group">
                       <label for="password"></label>
                       <input type="text" name="password" class="form-control" placeholder="Enter Password">
                     </div>
                     <div class="form-group">
                       <label for="password"></label>
                       <input type="submit"  class="btn btn-success" placeholder="SAVE">
                     </div>-->
                
                
                </form>
               
             </div>
               <canvas class="my-4" width="900" height="380"></canvas>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<!-- datatables plugon -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
    
  </body>
</html>
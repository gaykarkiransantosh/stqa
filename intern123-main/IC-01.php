<?php 
  // session_id('intern123');
  //session_name('intern123');
  session_start();
  include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>IC-01</title>
  <link rel="stylesheet" type="text/css" href="ic.css">
</head>
<?php
    $fdateError=$fdate=$tdateError=$tdate="";
   $cnameError=$cname=$sdetailsError=$sdetails=$paddrError=$paddr=$pmailError=$pmail=$pphoneError=$pphone=$winError=$win=$durationError=$duration=$locError=$loc=$snameError=$sname=$stipendError=$stipend=$daymError=$daym=$org=$orgError="";
    $pnameError=$pname=$div=$divError=$course=$courseError=$yearError=$year=$time=$timeError=$type=$typeError=$fnameError = $fname = $lnameError = $lname = $rollError = $rollNum = $mailError = $email = $phoneError = $phoneNum = $genderError = $gender = $branchError = $branch = $userError = $user = $passError = $pass = $cpassError = $cpass = $dateError = $date = $addrError = $address = $checkError = $check = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["fname"])){
            $fnameError = "Please enter your first name.";
        } elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["fname"])){
            $fnameError = "Enter correct name in characters only.";
        }
        else{
            $fname = $_POST["fname"];
        } 
        if(empty($_POST["pname"])){
            $pnameError = "Please enter your parent/guardian  name.";
        } elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["pname"])){
            $pnameError = "Enter correct name in characters only.";
        }
        else{
            $pname = $_POST["pname"];
        } 
        if(empty($_POST["cname"])){
            $cnameError = "Please enter your child's  name.";
        } elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["cname"])){
            $cnameError = "Enter correct name in characters only.";
        }
        else{
            $cname = $_POST["cname"];
        } 

        if(empty($_POST["location"])){
            $locError = "Please enter your location  name.";
        } elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["location"])){-
            $locError = "Enter correct location.";
        }
        else{
            $loc = $_POST["location"];
        } 

        if(empty($_POST["org"])){
            $orgError = "Please enter your organization  name.";
        } elseif(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST["org"])){-
            $orgError = "Enter correct location.";
        }
        else{
            $org = $_POST["org"];
        } 

        if(empty($_POST["sname"])){
            $snameError = "Please enter your supervisor name.";
        } elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["sname"])){
            $snameError = "Enter correct name in characters only.";
        }
        else{
            $sname = $_POST["sname"];
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

        if(empty($_POST["type"])){
            $typeError = "Please enter your type.";
          }
          else{
              $type = $_POST["type"];
          } 

          if(empty($_POST["win"])){
            $winError = "Please Select.";
          }
          else{
              $win = $_POST["win"];
          } 

          if(empty($_POST["time"])){
            $timeError = "Please enter your Duration time.";
          }
          else{
              $time = $_POST["time"];
          }

              if(empty($_POST["year"])){
                $yearError = "Please enter your Year of Study.";
              }
              else{
                  $year = $_POST["year"];
                }
     
                if(empty($_POST["course"])){
                    $courseError = "Please enter your course of Study.";
                  }
                  else{
                      $course = $_POST["course"];
                  }

                  if(empty($_POST["division"])){
                    $divError = "Please enter your Division of Study.";
                  }
                  else{
                      $div = $_POST["division"];
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

        if(empty($_POST["daysm"])){
            $daymError = "Please enter your Days Missed.";
        }
        elseif(!preg_match("/^[0-9]*$/",$_POST['daysm'])){
            $daymError = "Please enter your Days Missed.";
        }
        else{
            $daym = $_POST["daysm"];
        }
        
        if(empty($_POST["duration"])){
            $durationError = "Please enter Duration in Hours.";
        }
        elseif(!preg_match("/^[0-9]*$/",$_POST['duration'])){
            $durationError = "Please enter your Days Missed.";
        }
        else{
            $duration = $_POST["duration"];
        }
        
        if(!preg_match("/^[0-9a-zA-Z]*$/",$_POST['stipend'])){
            $stipendError = "Please enter your Days Missed.";
        }
        else{
            $stipend = $_POST["stipend"];
        }
      

           

        if(empty($_POST['fdt'])){
          $fdateError = "Please enter From date.";
        }
       else{
          $fdate = $_POST['fdt'];
        } 
        if(empty($_POST['tdt'])){
            $tdateError = "Please enter To date.";
          }
          else{
            $tdate = $_POST['tdt'];
          } 
        if(empty($_POST["email"])){
            $mailError = "Please enter your email address.";
        } elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $mailError = "Inavlid email format.";
        }
        else{
            $email = $_POST["email"];
        }

        if(empty($_POST["pemail"])){
            $pmailError = "Please enter your email address.";
        } elseif(!filter_var($_POST['pemail'],FILTER_VALIDATE_EMAIL)){
            $pmailError = "Inavlid email format.";
        }
        else{
            $pmail = $_POST["pemail"];
        }


        if(empty($_POST["addr"])){
          $addrError = "Please enter your address.";
        }
        else{
            $address = $_POST["addr"];
        }

        if(empty($_POST["sdetails"])){
            $sdetailsError = "Please enter Details.";
          }
          else{
              $sdetails = $_POST["sdetails"];
          }
  

        if(empty($_POST["paddr"])){
            $paddrError = "Please enter your address.";
          }
          else{
              $paddr = $_POST["paddr"];
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

        if(empty($_POST["pphonenum"])){
            $pphoneError = "Please enter your number.";
        } elseif(!preg_match("/^[0-9]*$/",$_POST['pphonenum'])){
            $pphoneError = "Please enter your correct phone number.";
        } elseif(strlen($_POST['pphonenum']) != 10 ){
            $pphoneError = "Please enter your correct phone number with proper format.";
        }
        else{
            $pphoneNum = $_POST["pphonenum"];
        } 

        
        
        if(empty($fnameError) && empty($lnameError) && empty($branchError) && empty($rollError) && empty($fdateError) && empty($addrError) && empty($mailError) && empty($phoneError) && empty($tdateError) && empty($typeError) && empty($timeError) && empty($yearError) && empty($courseError)  && empty($divError)  && empty($pnameError)  && empty($paddrError)  && empty($pmailError)  && empty($pphoneError)  && empty($winError)  && empty($durationError)  && empty($locError)  && empty($courseError) && empty($orgError)  && empty($snameError)  && empty($sdetailsError)  && empty($stipendError)  && empty($daymError)  && empty($cnameError))
        {
            #INSERT INTO `signin_data`(`fname`, `lname`, `username`, `userpass`, `branch`, `rollnum`, `dob`, `email`, `pno`, `gender`, `address`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
            include_once 'config.php';
            $type = $_POST['type'];
            $time = $_POST['time'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $branch = $_POST['branch'];
            $rollNum = $_POST['rnum'];
            $fdate = $_POST['fdt'];
            $tdate = $_POST['tdt'];
            $email = $_POST['email'];
            $phoneNum = $_POST['phonenum'];
            $address = $_POST['addr'];
            $year = $_POST['year'];
            $course = $_POST['course'];
            $div = $_POST['division'];
            $pname = $_POST['pname'];
            $paddr = $_POST['paddr'];
            $pmail = $_POST['pemail'];
            $pphoneNum = $_POST['pphonenum'];
            $win = $_POST['win'];
            $duration = $_POST['duration'];
            $loc = $_POST['location'];
            $org = $_POST['org'];
            $sname = $_POST['sname'];
            $sdetails = $_POST['sdetails'];
            $stipend = $_POST['stipend'];
            $daym = $_POST['daysm'];
            $cname = $_POST['cname'];






            
            



           









            $sql = "INSERT INTO ico1(int_type, int_time, fname, lname, rnum, address, email, phonenum, year, course, branch, division, pname, paddress, pemail, ppno, win, duration, fdt, tdt, location, org, sname, sdetails, stipend, daysm, cname)
                             VALUES ('$type','$time','$fname','$lname','$rollNum','$address','$email','$phoneNum','$year','$course','$branch','$div','$pname','$paddr','$pmail','$pphoneNum','$win','$duration','$fdate','$tdate','$loc','$org','$sname','$sdetails','$stipend','$daym','$cname')";
           
            if(mysqli_query($conn,$sql)){
                echo "Form Filled";
            }  
            else{
                echo "INVALID QUERY! Error!";
            }
            
        }
          #header("Location: index.php?fname=".$fname."&lname=".$lname."&username=".$user);
    }
     
?>
<body>
  <div class="wrapper">
  <center>
    <h1>K.J. Somaiya College of Engineering,Mumbai-77</h1>
    <h2>IC-01 Application for Internship</h2>
    <h2>Semester: July/January - November/April</h2> <br>
    </center>

    
    <form  method="POST">
       
   <div class="input_field">
    <label for="type">Internship Type:</label> <br><br>

    <select class="sel"  name="type" id="type">
    <option selected disabled value="">Select one</option>
        <option value="In-House">In-House</option>
        <option value="External">External</option>
    </select>
    <div class="error_message"><?php echo "*".$typeError;?></div><br>
   
   </div>

   <div class="input_field">
    <label for="time">Internship Duration Type:</label> <br><br>

    <select class="sel" name="time" id="time">
    <option selected disabled value="">Select one</option>
        <option value="Full Time">Full Time</option>
        <option value="Part Time">Part Time</option>
        <option value="Work From Home">Work From Home</option>
    </select>
    <div class="error_message">* <?php echo $timeError;?></div><br>
   
   </div>
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
    <div class="input_field">
    <label for="rnum">Roll number:</label><br>
    <input type="text" id="rnum" name="rnum"><br>
    <div class="error_message">* <?php echo $rollError;?></div><br>
    </div>
    <div class="text_field">
      <label for="addr">Address:</label><br>
      <input type="text" id="addr" name="addr"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $addrError;?></span><br><br>
    </div>
    <div class="input_field">
    <label for="email"> Somaiya Email Id:</label><br>
    <input type="text" id="email" name="email"><br>
    <div class="error_message">* <?php echo $mailError;?></div><br>
    </div>
    <div class="input_field">
    <label for="phonenum">Phone Number:</label><br>
    <input type="text" id="phonenum" name="phonenum"><br>
    <div class="error_message">* <?php echo $phoneError;?></div><br>
    </div>

    <div class="input_field">
    <label for="year">Year of Study:</label> <br><br>

    <select class="sel" name="year" name="year" id="year">
    <option selected disabled value="">Select one</option>
        <option value="FY">In-House</option>
        <option value="SY">SY</option>
        <option value="TY">TY</option>
        <option value="LY">LY</option>
    </select>
    <div class="error_message">* <?php echo $yearError;?></div><br>
   
   </div>

   <div class="input_field">
    <label for="course">Course:</label> <br><br>

    <select class="sel" name="course" name="course" id="course">
    <option selected disabled value="">Select one</option>
        <option value="B.Tech">B.Tech</option>
        
    </select>
    <div class="error_message">* <?php echo $courseError;?></div><br>
   
   </div>
   
    <div class="input_field">
   <label for="branch">Branch:</label><br><br>
    <select class="sel" name="branch" id="branch">
     <option selected disabled value="">Select one</option>
     <option value="Information Technology">Information Technology</option>
    </select>
      <div class="error_message">* <?php echo $branchError;?></div><br>
  </div>

  <div class="input_field">
   <label for="division">Division:</label><br><br>
    <select class="sel" name="division" id="division">
     <option selected disabled value="">Select one</option>
     <option value="A">A</option>
     <option value="B">B</option>
    </select>
      <div class="error_message">* <?php echo $divError;?></div><br>
  </div>

  <div class="input_field">
    <label for="pname">Name of Parent/Guardian:</label><br>
    <input type="text" id="pname" name="pname"><br>
    <div class="error_message">* <?php echo $pnameError;?></div><br>
    </div>

    <div class="text_field">
      <label for="paddr">Parent Address:</label><br>
      <input type="text" id="paddr" name="paddr"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $paddrError;?></span><br><br>
    </div>

    <div class="input_field">
    <label for="pemail">Parent/Guardian Email Id:</label><br>
    <input type="text" id="pemail" name="pemail"><br>
    <div class="error_message">* <?php echo $pmailError;?></div><br>
    </div>

    <div class="input_field">
    <label for="pphonenum">Parent/Guardian Phone Number:</label><br>
    <input type="text" id="pphonenum" name="pphonenum"><br>
    <div class="error_message">* <?php echo $pphoneError;?></div><br>
    </div> <br>


     
    
    <center>
      <h1>Details of internship</h1>
    </center><hr><br>
            
    <div>
    
    <div class="input_field">
   <label for="win">Winter/Summer:</label><br><br>
    <select class="sel" name="win" id="win">
     <option selected disabled value="">Select one</option>
     <option value="Winter">Winter</option>
     <option value="Summer">Summer</option>
    </select>
      <div class="error_message">* <?php echo $winError;?></div><br>
  </div>

  <div class="input_field">
    <label for="duration">Duration</label><br>
    <input type="text" id="duration" name="duration"><br>
    <div class="error_message">* <?php echo $durationError;?></div><br>
    </div>


<div class="input_field">
    <label for="fdt">From:</label><br>
    <input type="date" id="fdt" name="fdt"></input><br>
    <span class="error">* <?php echo $fdateError;?></span><br>
    </div>

    <div class="input_field">
    <label for="tdt">To:</label><br>
    <input type="date" id="tdt" name="tdt"></input><br>
    <span class="error">* <?php echo $tdateError;?></span><br>
    </div>

    <div class="text_field">
      <label for="location">Location:</label><br>
      <input type="text" id="location" name="location"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $locError;?></span><br><br>
    </div>

    <div class="text_field">
      <label for="org">Name Of Organization/Institute:</label><br>
      <input type="text" id="org" name="org"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $orgError;?></span><br><br>
    </div>

    <div class="input_field">
    <label for="sname">Supervisor Name:</label><br>
    <input type="text" id="sname" name="sname"><br>
    <div class="error_message">* <?php echo $snameError;?></div><br>
    </div>

    <div class="text_field">
      <label for="sdetails">Supervisor Details(Address/Email/Tel No.):</label><br>
      <input type="text" id="sdetails" name="sdetails"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $sdetailsError;?></span><br><br>
    </div>

    <div class="input_field">
      <label for="stipend">Stipend if any(per month):</label><br>
      <input type="text" id="stipend" name="stipend"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $stipendError;?></span><br><br>
    </div>

    <div class="input_field">
      <label for="daysm">Total Number of Instructional days Missed:</label><br>
      <input type="text" id="daysm" name="daysm"><br>
      <!--<textarea name="addr" id="addr" rows="5" cols="40"></textarea><br>-->
      <span class="error">* <?php echo $daymError;?></span><br><br>
    </div>
    
    </div>

    <hr><br>

    <center>
      <h1>Declaration</h1>
    </center>
    <hr><br>

    <div style="border: 1px solid black; padding:1rem;">
    <div class="text_field">
        I undersigned parent/guardian of <div class="input_field"><label for="pname"></label><br>
    <input type="text" id="cname" name="cname"><br>
    <div class="error_message"> <?php echo "*" . $pnameError;?></div><br></div> jointly take the responsibility and liability realted to all matters during the said internship period.
    </div>
    </div>
    <div class="btn">
        <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'">SUBMIT</button> 
    </div>
    </form>
  </div>
</body>
</html>
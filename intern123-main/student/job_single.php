<?php 


include('include/header.php');   ?>
    

<?php include('include/sidebar.php');  
  $id = $_GET['id'];




?>
    

    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="studentdashboard.php">DASHBOARD</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>INTERNSHIP DETAILS</li>
                 </ol>
               </nav>
             
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Internship Detail</h1>
          
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          
        <?php 
          $user = $_SESSION['username'];
           include("config.php");
           $query = mysqli_query($conn,"select * from all_internships where id = '$id'");
           $query1 = mysqli_query($conn,"select * from signin_data where username = '$user'");
           $email = mysqli_fetch_array($query1);
           $job_seeker = $email['email'];
           $name = $email['fname'];
           $last = $email['lname'];
           echo $job_seeker;
            while($row = mysqli_fetch_array($query)){
           
        ?>
          

          <div class="continer" >
          <center>
            <div class="row" style="padding-left:40rem">
              <div class="col-md-6">
                <div class="card p-5" style="border:2px solid purple">
                  <div class="card-body" >
                    <h2 class="card-title">Internship Detail: <?php  echo  $row['internship_title']; ?></h2>
                    <h2 class="card-title">Apply Date: <?php  echo $row['apply_date'];  ?></h2>
                    <h3 class="card-title">Description: <?php  echo $row['des'];  ?></h3> <br>
                    <p class="card-text">
                      Contact: <br> BRANCH:
                      <?php  echo $row['branch'];  echo "<br>";?> EMAIL:
                      <?php  echo $row['email_id'];  ?>
                    </p>
                                     </div>
                </div>
              </div>
            </div>
            </center>
          </div>
        
          <?php
            }
          ?>

  <br>  
  <div class="container"style="background:cream;border:2px solid purple;padding:5rem">
  <center><h2>APPLY FOR INTERNSHIP</h2></center>
  <form action="apply_job.php" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="job_seeker" value="<?php echo $job_seeker; ?>">
     <input type="hidden" name="id" value="<?php echo $id?>">
       <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
           <label for="">First Name:</label>
           <!--<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" style="font-size:1.5rem" value= disabled>-->
           <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" style="font-size:1.5rem">
           </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
           <label for="">Last Name:</label>
           <!--<input type="text" class="form-control p-2" name="lname" id="lname" placeholder="Last Name" style="font-size:1.5rem" value="<?php echo $last;?>" disabled>-->
           <input type="text" class="form-control p-2" name="lname" id="lname" placeholder="Last Name" style="font-size:1.5rem">
          </div>
          </div>
       </div>
     <br>
       <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
           <label for="">Semester:</label>
           <input type="text" class="form-control" name="sem" id="semester" placeholder="Semester" style="font-size:1.5rem">
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
           <label for="">Enter Your Resume</label>
           <input type="file" class="form-control" name="file" id="file" placeholder="Resume" style="font-size:1.5rem">
          </div>
          </div>
       </div>
   <br>
       <div class="row">
       
         <input type="submit" name ="submit" value="SUBMIT" class="btn btn-primary btn-block" style="font-size:2rem">
       
       </div>
    
    </form>
  </div>
   











        <!--<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>DOB</th>
                <th>Email Id</th>
                <th>Phone No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php 
          /*$id = 0;
          $user = $_SESSION['username'];
           include("config.php");
           $query = mysqli_query($conn, "select * from signin_data where username = '$user'");
            while($row = mysqli_fetch_array($query)){
              $id += 1;*/
           
        ?>
            
              <tr>
                 <td></td>
                 <td></td>
                
                 <td><?php  //echo $row['username'];  ?></td>
                 
                 <td><?php  //echo $row['userpass'];  ?></td>
                 
                 <td></td>
                 
                 <td></td>
                 <td><?php  //echo $row['dob'];  ?></td>
                 <td></td>
                 <td><?php  //echo $row['pno'];  ?></td>
                 <td><?php  //echo $row['gender'];  ?></td>
                 <td><?php  //echo $row['address'];  ?></td>
                 <td>
                    <div class="row">
                    <div class="btn-group">-->
                    <!--echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$query2['id']."'>x</a></td><tr>"; //use double quotes for js inside php!-->
                    
                      <!--<a onClick="return confirm('Please confirm edition');" href="customeredit.php?edit= class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                      <a onClick="return confirm('Please confirm deletion');" href="customerdelete.php?del= class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>-->

                    <!--</div>
                    </div>
                 
                 </td>
                 
              </tr>
            <?php   
          //}  ?>
        </tbody>
        <tfoot>
            <tr>
            <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>DOB</th>
                <th>Email Id</th>
                <th>Phone No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit/Delete</th>
            </tr>
        </tfoot>
    </table>-->
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
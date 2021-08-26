<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>Students Applied</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Selected applicants</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>No.</th>
                <th>Applicant Email Id</th>
                <th>Internship Title</th>
                <th>Internship Description</th>
                <th>Branch From</th>
                <th>Current Semester</th>
                <th>Applied Date</th>
                <th>Resume</th>
                <th>Status</th>

                
            </tr>
        </thead>
        
        <tbody>
        <?php 
            $user = $_SESSION['username'];
            include("config.php");
            $query2 = mysqli_query($conn, "select email_id from teachers_signin where username = '$user'");
            $email = mysqli_fetch_array($query2);
            $em = $email['email_id'];
            $query = mysqli_query($conn, "SELECT * FROM internship_apply INNER JOIN all_internships ON internship_apply.int_id=all_internships.id WHERE all_internships.email_id = '$em' AND internship_apply.status= 'Accept'");
              while($row = mysqli_fetch_assoc($query)){
                  $app_em = $row['applicant_email'];
                  $query3 = mysqli_query($conn, "SELECT * FROM signin_data WHERE email = '$app_em'");
                  $stud_det = mysqli_fetch_array($query3);
            
          ?>    
              <tr>
                 <td><?php  echo $row['id'];  ?></td>
                
                 <td><?php  echo $row['applicant_email'];  ?></td>
                 
                 <td><?php  echo $row['internship_title'];  ?></td>
                 <td><?php  echo $row['des'];  ?></td>
                 <td><?php  echo $stud_det['branch'];  ?></td>
                 <td><?php  echo $row['sem'];  ?></td>
                 <td><?php  echo $row['date_applied'];  ?></td>
                 
                 <td><form action="">
                    <div class="form-group">
                    <a href="http://localhost/wpfile/miniproj-master/miniproj-master/resumes/<?php  echo $row['file'];?>">Download</a>
                    </div>
                  </form>
                </td>
                <td><?php  echo $row['status'];  ?></td>

                 
              </tr>
            <?php   }  ?>
        </tbody>
        <tfoot>
            <tr>
            <th>No.</th>
                <th>Applicant Email Id</th>
                <th>Internship Title</th>
                <th>Internship Description</th>
                <th>Branch From</th>
                <th>Current Semester</th>
                <th>Applied Date</th>
                <th>Resume</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
    <!--<iframe src="<?php //echo $path.$pdf; ?>" width="90%" height="500px"></iframe>-->
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
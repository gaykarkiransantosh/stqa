<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="allinternships.php">All Internships</a></li>
                 <li class="breadcrumb-item"><a href="#">Add Intenships</a></li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2"> Add Internship </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>

             <div>
             <?php 
                     include("config.php");
                     $user = $_SESSION['username'];
                     $query1 = mysqli_query($conn,"select email_id, branch from teachers_signin where username = '$user'");
                     $det = mysqli_fetch_array($query1);
                     $em = $det['email_id'];
                     $br = $det['branch'];
                     ?>
                <form action="addintern.php" method="POST">
                     <div class="form-group">
                       <label for="email_id">Email ID:</label>
                       <input type="email" name="email_id" class="form-control" placeholder="Enter Email Id" value="<?php echo $em;?>" disabled>
                     </div>
                     
                     <div class="form-group">
                       <label for="internship_title">Intenship Title:</label>
                       <input type="text" name="internship_title" class="form-control" placeholder="Enter Internship Title">
                     </div>
                     <div class="form-group">
                       <label for="des">Description:</label>
                       <input type="text" name="des" class="form-control" placeholder="Enter description">
                     </div>

                      <div class="form-group">
                       <label for="branch">Branch:</label>
                       <input type="text" name="branch" class="form-control" placeholder="Enter branch" value="<?php echo $br;?>" disabled>
                     </div>

                     <div class="form-group">
                       <label for="apply_date">Last Application Date:</label>
                       <input type="date" name="apply_date" class="form-control" placeholder="Enter Apply Date">
                     </div>

                     <div class="form-group">
                       <label for="password"></label>
                       <input type="submit"  class="btn btn-success" placeholder="SAVE">
                     </div>
                
                
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

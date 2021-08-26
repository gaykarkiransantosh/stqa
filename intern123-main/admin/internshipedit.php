<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');  
include('../config.php');
$id=$_GET['edit'];
$query = mysqli_query($conn, "select * from all_internships where id = '$id'");
while($row=mysqli_fetch_array($query)){
    $email_id = $row['email_id'];
    $internship_title = $row['internship_title'];
    $des = $row['des'];
    $branch = $row['branch'];
    $apply_date = $row['apply_date'];
 
}

?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="allinternships.php">All Internships</a></li>
                 <li class="breadcrumb-item"><a href="#">Add Intenships</a></li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2"> Edit Internship </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>

             <div>
                <form action="iedit.php" method="POST">
                     <div class="form-group">
                       <label for="email_id"></label>
                       <input type="email" name="email_id" class="form-control" value="<?php echo $email_id ?>" >
                     </div>
                     <div class="form-group">
                       <label for="internship_title"></label>
                       <input type="text" name="internship_title" class="form-control" value="<?php echo $internship_title ?>" >
                     </div>
                     <div class="form-group">
                       <label for="des"></label>
                       <input type="text" name="des" class="form-control" value="<?php echo $des ?>" >
                     </div>

                      <div class="form-group">
                       <label for="branch"></label>
                       <input type="text" name="branch" class="form-control" value="<?php echo $branch ?>" >
                     </div>

                     <div class="form-group">
                       <label for="apply_date"></label>
                       <input type="date" name="apply_date" class="form-control" value="<?php echo $apply_date ?>" >
                     </div>

                     <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
                     <div class="form-group">
                       <label for="password"></label>
                       <input type="submit" name="submit" class="btn btn-success" placeholder="SAVE">
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

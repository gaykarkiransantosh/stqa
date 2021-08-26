<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="teacherdashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>Job Giver</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Job Givers</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          <?php 
          $user = $_SESSION['username'];
           include("config.php");
           $query = mysqli_query($conn, "select * from teachers_signin where username = '$user'");
            while($row = mysqli_fetch_array($query)){
           
        ?>
          <div class="continer">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"><?php  echo $row['fname']; echo"&nbsp";echo $row['lname'];  ?></h2>
                    <h3 class="card-title"><?php  echo $row['position'];echo"&nbsp";echo $row['faculty_num'];   ?></h3>
                    <p class="card-text">
                      <?php  echo $row['branch'];  echo "<br>";?>
                      <?php  echo $row['email_id'];  ?>
                    </p>
                    <a onClick="return confirm('Please confirm edition');" href="teacheredit.php?edit=<?php echo $row['email_id']; ?>" class="btn" style="background-color:#bf55ec; color:white;">EDIT INFORMATION</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
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

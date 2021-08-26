<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="studentdashboard.php">Student Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>Student Details</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Student Details</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          
        <?php 
          $user = $_SESSION['username'];
           include("config.php");
           $query = mysqli_query($conn, "select * from signin_data where username = '$user'");
            while($row = mysqli_fetch_array($query)){
           
        ?>
          <div class="continer">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"><?php  echo $row['fname']; echo"&nbsp";echo $row['lname'];  ?></h2>
                    <h3 class="card-title"><?php  echo $row['rollnum'];  ?></h3>
                    <p class="card-text">
                      <?php  echo $row['branch'];  echo "<br>";?>
                      <?php  echo $row['email'];  ?>
                    </p>
                    <a onClick="return confirm('Please confirm edition');" href="studentedit.php?edit=<?php echo $row['email']; ?>" class="btn" style="background-color:#bf55ec; color:white;">EDIT INFORMATION</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>












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

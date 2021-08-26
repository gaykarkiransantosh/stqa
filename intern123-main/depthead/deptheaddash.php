<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>All Approvals</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
          </div>

          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Internship Type</th>
                <th>Internship Duration</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Roll Number</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Year</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Division</th>
                <th>Parent name</th>
                <th>Parent address</th>
                <th>Parent email</th>
                <th>Parent Phone Number</th>
                <th>Winter/Summer</th>
                <th>Duration</th>
                <th>From</th>
                <th>To</th>
                <th>Location</th>
                <th>Organisation Name</th>
                <th>Supervisor name</th>
                <th>Supervisor details</th>
                <th>Stipend</th>
                <th>Days Missed</th>
                <th>Status</th>
                <th>Approve/Not Approve</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include("config.php");
            $query = mysqli_query($conn, "SELECT * from ico1 WHERE status ='NA'");
              while($row = mysqli_fetch_array($query)){    
                if($row>0){       
        ?>
            
              <tr>
                 <td><?php  echo $row['id'];  ?></td>
                
                 <td><?php  echo $row['int_type'];  ?></td>
                 
                 <td><?php  echo $row['int_time'];  ?></td>
                 <td><?php  echo $row['fname'];  ?></td>
                 <td><?php  echo $row['lname'];  ?></td>
                 <td><?php  echo $row['rnum'];  ?></td>
                 <td><?php  echo $row['address'];  ?></td>
                 <td><?php  echo $row['email'];  ?></td>
                 <td><?php  echo $row['phonenum'];  ?></td>
                 <td><?php  echo $row['year'];  ?></td>
                 <td><?php  echo $row['course'];  ?></td>
                 
                 <td><?php  echo $row['branch'];  ?></td>
                 
                 <td><?php  echo $row['division'];  ?></td>

                 <td><?php  echo $row['pname'];  ?></td>
                 <td><?php  echo $row['paddress'];  ?></td>
                 <td><?php  echo $row['pemail'];  ?></td>
                 <td><?php  echo $row['ppno'];  ?></td>
                 <td><?php  echo $row['win'];  ?></td>
                 <td><?php  echo $row['duration'];  ?></td>
                 <td><?php  echo $row['fdt'];  ?></td>
                 <td><?php  echo $row['tdt'];  ?></td>
                 <td><?php  echo $row['location'];  ?></td>
                 <td><?php  echo $row['org'];  ?></td>
                 <td><?php  echo $row['sname'];  ?></td>
                 <td><?php  echo $row['sdetails'];  ?></td>
                 <td><?php  echo $row['stipend'];  ?></td>
                 <td><?php  echo $row['daysm'];  ?></td>
                 <td><?php  echo $row['status'];  ?></td>

                 <td>
                    <div class="row">
                    <div class="btn-group">
                      
                      <a onClick="return confirm('Please confirm approval.');" href="approval.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">APPROVE</a>
                      <a onClick="return confirm('Please confirm for changes.');" href="changes.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">CHANGES NEEDED</a>

                    </div>

                    
                    
                    </div>
                 
                 </td>
                 
              </tr>
            <?php   } } ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Id.</th>
                <th>Internship Type</th>
                <th>Internship Duration</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Roll Number</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Year</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Division</th>
                <th>Parent name</th>
                <th>Parent address</th>
                <th>Parent email</th>
                <th>Parent Phone Number</th>
                <th>Winter/Summer</th>
                <th>Duration</th>
                <th>From</th>
                <th>To</th>
                <th>Location</th>
                <th>Organisation Name</th>
                <th>Supervisor name</th>
                <th>Supervisor details</th>
                <th>Stipend</th>
                <th>Days Missed</th>
                <th>Status</th>
                <th>Approve/Not Approve</th>
            </tr>
        </tfoot>
    </table>
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

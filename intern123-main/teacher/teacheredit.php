
<?php  
include('include/header.php');
include('include/sidebar.php');  
include('config.php');

  $id=$_GET['edit'];
  $query = mysqli_query($conn, "select * from teachers_signin where email_id = '$id'");
  while($row=mysqli_fetch_array($query)){
         $fname = $row['fname'];
         $lname = $row['lname'];
         $username = $row['username'];
         $password = $row['userpass'];
         $branch = $row['branch'];
         $faculty_num = $row['faculty_num'];
         $dob = $row['dob'];
         $email = $row['email_id'];
         $pno = $row['pno'];
         $address = $row['working_addr'];
         $position = $row['position'];
      
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2"> Edit Profile </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>

             <div>
                <form action="tedit.php" method="POST">
                       
                <div class="form-group">
                       <label for="fname"></label>
                       <input type="text" name="fname" value="<?php echo $fname ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="lname"></label>
                       <input type="text" name="lname" value="<?php echo $lname ?>" class="form-control" placeholder="Enter First name">
                     </div>


                     <div class="form-group">
                       <label for="username"></label>
                       <input type="text" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Enter First name">
                     </div>
                     <div class="form-group">
                       <label for="password"></label>
                       <input type="text" name="userpass" value="<?php echo $password ?>" class="form-control" placeholder="Enter Password">
                     </div>

                     <div class="form-group">
                       <label for="branch"></label>
                       <input type="text" name="branch" value="<?php echo $branch ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="faculty_num"></label>
                       <input type="number" name="faculty_num" value="<?php echo $faculty_num ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="dob"></label>
                       <input type="date" name="dob" value="<?php echo $dob ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="email"></label>
                       <input type="email" name="email_id" value="<?php echo $email ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="pno"></label>
                       <input type="number" name="pno" value="<?php echo $pno ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="position"></label>
                       <input type="text" name="position" value="<?php echo $position ?>" class="form-control" placeholder="Enter First name">
                     </div>

                     <div class="form-group">
                       <label for="address"></label>
                       <input type="text" name="working_addr" value="<?php echo $address ?>" class="form-control" placeholder="Enter First name">
                     </div>
                     


                     <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">

                     <div class="form-group">
                       <label for="password"></label>
                       <input type="submit" name="submit"  class="btn btn-success" placeholder="SAVE">
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



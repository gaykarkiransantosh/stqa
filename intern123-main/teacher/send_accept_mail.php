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
               
          <h1 class="h2">Accept/Reject the applicants</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          
  <form action="accept_mail.php" method="post" style="border: 1px solid purple; width:60%; margin-left: 10%; padding:20px">
        <?php 
            $id = $_GET["id"];
            $user = $_SESSION['username'];
            include("config.php");
            $query2 = mysqli_query($conn, "select email_id from teachers_signin where username = '$user'");
            $email = mysqli_fetch_array($query2);
            $em = $email['email_id'];
            
            /*$fn = $row['fname'];
            $ln = $row['lname'];*/
            $query = mysqli_query($conn, "SELECT * FROM internship_apply INNER JOIN all_internships ON internship_apply.int_id=all_internships.id WHERE all_internships.email_id = '$em' AND internship_apply.apply_id = '$id'");

              while($row = mysqli_fetch_assoc($query)){
                  $app_em = $row['applicant_email'];
                  $fn = $row['fname'];
                  $ln = $row['lname'];
                  $de = $row['des'];
                  $int_tit = $row['internship_title'];
                  $query3 = mysqli_query($conn, "SELECT * FROM signin_data WHERE email = '$app_em'");
                  $stud_det = mysqli_fetch_array($query3);
                    
          ?>     
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" id="fname" name="fname" value="<?php echo $fn; ?>">
                    <input type="hidden" id="lname" name="lname" value="<?php echo $ln; ?>">
                    <input type="hidden" id="des" name="des" value="<?php echo $de; ?>">
                    <input type="hidden" id="intt" name="intt" value="<?php echo $int_tit; ?>">

                    <h1><?php echo strtoupper($row['fname']); ?> <?php echo strtoupper($row['lname']); ?></h1>  <hr> <br>
                         <div class="form-group">
                         <label for="to">TO</label>
                         <!--td><input type="email" name="to" id="to" class="form-control" value="<?php echo $app_em;?>" disabled></td>-->
                         <td><input type="email" name="to" id="to" class="form-control"></td>
                         </div>

                         <div class="form-group">
                         <label for="from">FROM</label>
                         <!--<td><input type="email" name="from" id="from" class="form-control" placeholder="Your Email" value="<?php echo $em;?>"disabled></td>-->
                         <td><input type="email" name="from" id="from" class="form-control" placeholder="Your Email"></td>
                         </div>

                         <div class="form-group">
                         <label for="body">BODY</label>
                         <td><textarea name="body" id="body" class="form-control" cols="30" rows="10"> Dear <?php echo strtoupper($row['fname']); ?><?php echo "&nbsp";?><?php echo strtoupper($row['lname']); ?></textarea></td>
                         </div>



                         
      

            <?php   }  ?>
            <input type="submit" style="background-color:purple" class="btn btn-success btn-block" name="submit" id="submit" value="SEND">

            </form>
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
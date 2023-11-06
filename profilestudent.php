<?php
  include "headerafter.php";
  session_start(); 
  $_SESSION['studentname'];
  $_SESSION['studentid'];
?>

<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Student Profile</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
        <?php
            include_once "student.php";
            $s=new student();
            $s->setid($_SESSION['studentid']);
            $log=$s->checkbyid();
           
            if($row=mysqli_fetch_assoc($log))
            {
                
        ?>
               <form action="#" method="post">
                <table class="table table-striped">
                    <tr>
                    <td colspan="2" style="text-align:center">
                        <img src="images/<?php echo($row['sid']); ?>.jpg" width="100px" height="100px" class="roundcircle" />
                    </td>
                    </tr>
                    <tr>
                    <th scope="col">First Name</th>
                    <td><?php echo($row['sfname']); ?> </td>
                    </tr>
                    <tr>
                    <th scope="col">Middle Name</th>
                    <td><?php echo($row['smname']); ?> </td>
                    </tr>
                    <tr>
                    <th scope="col">Last Name</th>
                    <td><?php echo($row['slname']); ?> </td>
                    </tr>
                    <tr>
                    <th scope="col">Email</th>
                    <td><?php echo($row['semail']); ?> </td>
                    </tr>
                    <tr>
                    <th scope="col">Phone</th>
                    <td><?php echo($row['sphone']); ?> </td>
                    </tr>
                </table>

        <?php } ?>
                  <div class="row">
                    <div class="col-md-6 form-group">
                     <a href="editprofilestudent.php" class="btn btn-primary px-5 py-2"> Edit Profile </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                     <a href="deletestudent.php" class="btn btn-primary px-5 py-2">Delete Account</a>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>

<?php
include "footer.php";
?>
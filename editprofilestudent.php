<?php
    ob_start();
    session_start();
    include "headerafter.php";
    ?>

<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Edit Professor Profile</h1>
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
                if(isset($_POST['btnupdate']))
                 {
                    $s->setid($_SESSION['studentid']);
                    $s->setfname($_POST['txtfname']);
                    $s->setmname($_POST['txtmname']);
                    $s->setlname($_POST['txtlname']);
                    $s->setemail($_POST['txtemail']);
                    $s->setphone($_POST['txtphone']);
                    $msg= $s->updateall();
                    if($msg=="Done")
                    {
                        echo("<h4 class='alert alert-success'>Your User Has Been Updated</h4>");
                        header("Refresh:5; url=profilestudent.php");
                    }
                    else
                        echo($msg)  ; 
                 }
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
                    <td> <input type="text" name="txtfname" value='<?php echo($row['sfname']); ?>' /> </td>
                    </tr>
                    <tr>
                    <th scope="col">Middle Name</th>
                    <td><input type="text" name="txtmname" value='<?php echo($row['smname']); ?>' /></td>
                    </tr>
                    <tr>
                    <th scope="col">Last Name</th>
                    <td><input type="text" name="txtlname" value='<?php echo($row['slname']); ?>' /></td>
                    </tr>
                    <tr>
                    <th scope="col">Email</th>
                    <td><input type="text" name="txtemail" value='<?php echo($row['semail']); ?>' /></td>
                    </tr>
                    <tr>
                    <th scope="col">Phone</th>
                    <td><input type="text" name="txtphone" value='<?php echo($row['sphone']); ?>' /></td>
                    </tr>
                </table>

        <?php } ?>
                  <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="submit" value="Update Changes" class="btn btn-primary px-5 py-2" name="btnupdate">
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
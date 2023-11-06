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
                include_once "professor.php";
                $p=new professor();
                if(isset($_POST['btnupdate']))
                 {
                    $p->setemail($_SESSION['profemail']);
                    $p->setfname($_POST['txtfname']);
                    $p->setlname($_POST['txtlname']);
                    $p->setphone($_POST['txtphone']);
                    $msg= $p->updateall();
                    if($msg=="Done")
                    {
                        echo("<h4 class='alert alert-success'>Your User Has Been Updated</h4>");
                        header("Refresh:5; url=profileprof.php");
                    }
                    else
                        echo($msg)  ; 
                 }
                 $p->setemail($_SESSION['profemail']);
                 $log=$p->checkbyemail();
            
                 if($row=mysqli_fetch_assoc($log))
                 {
                    
                
        ?>
            <form action="#" method="post">
                <table class="table table-striped">
                    <tr>
                    <td colspan="2" style="text-align:center">
                        <img src="images/<?php echo($row['pfname']); ?>.jpg" width="100px" height="100px" class="roundcircle" />
                    </td>
                    </tr>
                    <tr>
                    <th scope="col">First Name</th>
                    <td> <input type="text" name="txtfname" value='<?php echo($row['pfname']); ?>' /> </td>
                    </tr>
                    <tr>
                    <th scope="col">Last Name</th>
                    <td><input type="text" name="txtlname" value='<?php echo($row['plname']); ?>' /></td>
                    </tr>
                    <tr>
                    <th scope="col">Phone</th>
                    <td><input type="text" name="txtphone" value='<?php echo($row['pphone']); ?>' /></td>
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
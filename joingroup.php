<?php
ob_start();
session_start();
// if(isset($_SESSION['studentid']))
// 	header('location:index.html');
$_SESSION['studentid']= 17;   //remove this
include_once "headerafter.php";
?>
 <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Join Group</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Join Group</span></p>
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
              <h2 class="mb-4">Team Members</h2>
               <?php
                if(isset($_POST["btnshowdetails"]))
                    header('location: gpdetails.php?gpno='.$_POST["txtgno"]);
              ?>
              <form method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Group Number</label>
                    <input type="text" id="number" class="form-control py-2" name="txtgno" required>
                  </div>
                </div>
                <div class="row text-center">
                  <div class="col-md-12 form-group">
                    <input type="submit" value="Show Group Details" class="btn btn-primary px-5 py-2 w-100" name="btnshowdetails">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php
include_once "footer.php";
?>
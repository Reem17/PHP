<?php
include_once "header.php";
?>
 <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
          <div class="row align-items-center justify-content-center site-hero-sm-inner">
            <div class="col-md-7 text-center">
    
              <div class="mb-5 element-animate">
                <h1 class="mb-2">Log in</h1>
                <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
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
              <h2 class="mb-4 text-center">Log in as</h2>
              <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6 form-group">
                    <a href="loginprof.php" class="btn btn-primary px-5 py-2 float-left">Professor</a>
                    </div>
                    <div class="col-md-6 form-group">
                    <a href="loginstudent.php" class="btn btn-primary px-5 py-2 float-right">Student</a>
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
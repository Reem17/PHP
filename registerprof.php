<?php
ob_start();
include_once "header.php";
?>
 <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Register</h1>
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
              <h2 class="mb-5">Register Professor</h2>
              <?php
                if (isset($_POST["btnregister"]))
                {
                    include_once "professor.php";      
                    $repw=($_POST["txtrepw"]);
                    $regularexp="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$^";  
                    if($_POST['txtpw']==$_POST['txtrepw'])     
                    {
                        if(preg_match($regularexp,$_POST['txtpw']))
                        {
                            $p= new professor(); 
                            $p-> setfname($_POST["txtfname"]);
                            $p-> setlname($_POST["txtlname"]);
                            $p-> setphone($_POST["txtphone"]);
                            $p-> setemail($_POST["txtemail"]);
                            $p-> setpw(sha1($_POST["txtpw"]));
                            $msg=$p->insert();
                            if($msg=="Done")
                            {
                              echo ("<h4 class='alert alert-success'>Your Account has been Created</h4>");
                              header("Refresh:5; url=loginprof.php");
                            }
                            else if(strpos($msg,'UNIQUE'))
                               echo("<h4 class='alert alert-danger'> Sorry this phone has been used  </h4>");
                            else
                            {
                              echo("<h4 class='alert alert-danger'> Error is (".$msg.")</h4>");
                            }
                        }
                        else
                        {
                          echo ("<h4 class='alert alert-danger'>please enter strong password (Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:)</h4>");
                        }
                    }
                    else 
                    {
                        echo ("<h4 class='alert alert-danger'> Password doesn't match</h4>");
                    }
                }
              ?>
              <form action="#" method="post">
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"> First Name</label>
                      <input type="text" id="name" class="form-control py-2" name="txtfname" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"> Last Name</label>
                      <input type="text" id="name" class="form-control py-2" name="txtlname" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Phone</label>
                      <input type="tel" id="name" class="form-control py-2" name="txtphone" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="email" id="name" class="form-control py-2" name="txtemail" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" id="name" class="form-control py-2" name="txtpw" required>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Re-type Password</label>
                      <input type="password" id="name" class="form-control py-2" name="txtrepw" required>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Register" class="btn btn-primary px-5 py-2" name="btnregister">
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
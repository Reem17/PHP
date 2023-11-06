<?php
	ob_start(); 
    include "header.php";
    session_start();
?>            
    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Log in</h1>
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
              <h2 class="mb-4">Update Password</h2>
              <?php	 
                if(isset($_POST['btnupdatepw']))
                {
                    $repw=($_POST["txtrepwnew"]);
                    $regularexp="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$^";  
                    if($_POST['txtpwnew']==$_POST['txtrepwnew'])     
                    {
                        if(preg_match($regularexp,$_POST['txtpwnew']))
                        {
                          if($_POST['txtactcode']==$_SESSION['activationcode'])
                          {
                                include_once "professor.php";
                                $p=new professor();
                                $p->setpw(sha1($_POST['txtpwnew']));
                                $p->setemail($_GET['em']);
                                $log= $p->update();
                                if($log=="ok")
                                {
                                    echo("<h4 class='alert alert-success'>Password has been Updated</h4>"); 
                                    header("Refresh:5; url=loginprof.php");
                                }
                                else
                                    echo("<h4 class='alert alert-danger'>Sorry This Email doesnot exist </h4>");
                          } 
                          else
                            echo("<h4 class='alert alert-danger'>Sorry this Activation Code is wrong </h4>");
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
              <form method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Activation Code</label>
                    <input type="number" id="name" class="form-control py-2" name="txtactcode" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">New Password</label>
                      <input type="password" id="name" class="form-control py-2" name="txtpwnew" required>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Re-type New Password</label>
                      <input type="password" id="name" class="form-control py-2" name="txtrepwnew" required>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Update Password" class="btn btn-primary px-5 py-2" name="btnupdatepw">
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
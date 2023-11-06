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
              <h1 class="mb-2">Delete Account</h1>
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
                if(isset($_POST['btndelaccount']))
                {
                    if(isset($_POST['btndelete']))
                    {
                        include_once "professor.php";
                        $p=new professor();
                        $p->setemail($_SESSION['profemail']);
                        $p->setpw(sha1($_POST['txtpw']));
                        $log= $p->Login();
                        if($row=mysqli_fetch_assoc($log))
                        {
                                $msg= $p->delete();
                                if($msg=="Done")
                                {
                                echo("<h4 class='alert alert-success'>Your Account Has been deleted</h4>");
                                header("Refresh:5; url=logoutprof.php");
                                }
                                else
                                echo($msg);
                        }
                        else 
                        echo("<h4 class='alert alert-danger'>Invaild password</h4>");
                    }
                }
              ?> 
              <form method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">password</label>
                    <input type="password" id="name" class="form-control py-2" name="txtpw" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Delete Account" class="btn btn-primary px-5 py-2" name="btndelaccount">
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
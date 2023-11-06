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
              <h2 class="mb-4">Update Student Code</h2>
              <?php	 
                if(isset($_POST['btnupdatecode']))
                {
                    if($_POST['txtactcode']==$_SESSION['activationcode'])
                    {
                        include_once "student.php";
                        $s=new student();
                        $s->setemail($_GET['em']);
                        $log= $s->update();
                        if($log=="ok")
                        {
                            echo("<h4 class='alert alert-success'>Student Code has been Updated,<strong> Your New Code is '".$s->getqr()."'</strong></h4>"); 
                            echo("<h1><a href='loginstudent.php'>Login</a></h1>");

                        }
                        else
                            echo("<h4 class='alert alert-danger'>Sorry This Email doesnot exist </h4>");
                    } 
                    else
                    echo("<h4 class='alert alert-danger'>Sorry this Activation Code is wrong </h4>");
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
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Update Student Code" class="btn btn-primary px-5 py-2" name="btnupdatecode">
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
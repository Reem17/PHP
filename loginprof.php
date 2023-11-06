<?php
ob_start();
// if(isset($_SESSION['profemail']))
// 	header('location:index.php');
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
              <h2 class="mb-4">Log in Professor</h2>
              <?php
                if(isset($_POST["btnlogin"]))
                {
                    include_once "professor.php";
                    $p= new professor();
                    $p-> setemail($_POST["txtemail"]);
                    $p-> setpw(sha1($_POST["txtpw"]));
                    $log= $p->Login();
                    if($row= mysqli_fetch_assoc($log))
                    {
                      session_start();
                      $_SESSION['profname']= $row['pfname'];
                      $_SESSION['profemail']= $row['pemail'];
                      echo("<script> window.open('indexprof.php', '_self')</script>");
                      if(isset($_POST['checkrm']))
                      {
                        setcookie("profcookie",$_POST['txtemail'],time()+60*60*24*365);
                      }
                    }
                    else
                    {
                      echo("<h4 class='alert alert-danger'>User not found</h4>");
                    }
                }
                if(isset($_COOKIE['profcookie']))
                {				
                 echo("<script> window.open('indexprof.php', '_self')</script>");
                }	
			  ?>
              <form method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Email</label>
                    <input type="email" id="name" class="form-control py-2" name="txtemail" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password" id="name" class="form-control py-2" name="txtpw" required>
                  </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input text-info" id="exampleCheck1" name="checkrm">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <p><a href="forgetpw.php" class="text-secondary">Forget Password ?</a></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Login" class="btn btn-primary px-5 py-2" name="btnlogin">
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
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
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
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
              <h2 class="mb-5">Register Student</h2>
              <?php
                    include_once "student.php";      
                    $s= new student(); 
                    if (isset($_POST["btnregister"]))
                    {
                      $s-> setfname($_POST["txtfname"]);
                      $s-> setmname($_POST["txtmname"]);
                      $s-> setlname($_POST["txtlname"]);
                      $s-> setphone($_POST["txtphone"]);
                      $s-> setemail($_POST["txtemail"]); 
                      $s-> setfno($_POST["sfaculty"]);                       
                      $s-> setsecno($_POST["ssection"]); 
                      $s->setqr(); 
                      if ($_POST["sfaculty"]==1||$_POST["sfaculty"]==3)
                         $level= 4;
                      else if ($_POST["sfaculty"]==2)
                        $level= 5; 
                      $s-> setlevel($level) ;   
                      $msg= $s->insert();
                      if($msg=="Done")
                      {
                        $code= $s-> getqr();
                        echo ("<h4 class='alert alert-success'>Your Account has been Created</h4>");
                        echo ("<h4 class='alert alert-success'>Your Code is  $code</h4>");
                        // header("Refresh:5; url=loginstudent.php");
                      }
                      else if(strpos($msg,'UNIQUE3'))
                        echo("<h4 class='alert alert-danger'> Sorry this phone has been used  </h4>");
                      else if(strpos($msg,'UNIQUE2'))
                        echo("<h4 class='alert alert-danger'> Sorry this Email has been used  </h4>");
                      else
                      {
                        echo("<h4 class='alert alert-danger'> Error is (".$msg.")</h4>");
                      }
                    }
              ?>
              <form action="#" method="post">
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"> First Name</label>
                      <input type="text" id="fname" class="form-control py-2" name="txtfname" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"> Middle Name</label>
                      <input type="text" id="mname" class="form-control py-2" name="txtmname" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name"> Last Name</label>
                      <input type="text" id="lname" class="form-control py-2" name="txtlname" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Phone</label>
                      <input type="tel" id="name" class="form-control py-2" name="txtphone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="email" id="name" class="form-control py-2" required name="txtemail"> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Faculty Name</label>
                      <select name="sfaculty" class="form-control text-muted">
                        <option selected value="Choose Faculty" >Choose Faculty </option>            
                        <?php          
                            include "faculty.php";
                            $f= new faculty();
                            $resultfac= $f->selectall();              
                            while($fetcherfac=mysqli_fetch_assoc($resultfac))
                            {    
                              echo("<option value='".$fetcherfac["fno"]."'> ".$fetcherfac["fname"]." </option>");
                              $f-> setfno($fetcherfac["fno"]);
                            }
                              // echo ("'".$f-> getfno()."'"); 
                        ?>                         
                    </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Section Name</label>
                      <select name="ssection" class="form-control text-muted">
                        <option selected value="Choose Section" >Choose Section </option>            
                        <?php
                             include "section.php";
                             $sec= new section();
                             $resultsec= $sec-> selectall();
                             while($fetchersec=mysqli_fetch_assoc($resultsec))
                             {    
                               echo("<option value='".$fetchersec["secno"]."'> ".$fetchersec["secname"]." </option>");
                             }
                        ?>                         
                    </select>
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
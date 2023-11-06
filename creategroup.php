<?php
ob_start();
session_start();
// if(isset($_SESSION['studentid']))
// 	header('location:index.html');
$_SESSION['studentid']= 15;   //remove this
include_once "headerafter.php";
?>
 <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Create Group</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Create Group</span></p>
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
              <h2 class="mb-4">Leader</h2>
               <?php
                include_once "student.php";
                $s=new student();
                $s->setid($_SESSION['studentid']);
                include_once "graduationproject.php";
                $g=new graduationproject();
                $log= $g->getlastgpno();
                if($row=mysqli_fetch_assoc($log))
                  $newgpno= $row['right(max(gpno), 1)']+1;
                if(isset($_POST["btncreate"]))
                {
                  $g->setgpno('G'.$newgpno);
                  $g->setgpname($_POST["txtname"]);
                  $desc= str_replace(array("’","'"),"&#39;",$_POST["txtdescription"]);
                  $g->setgpdetails($desc);
                  $g->setpemail($_SESSION['profemail']);
                  $g-> setstudentid($_SESSION['studentid']);
                  $msg= $g->insert();
                  $s->setgpno('G'.$newgpno);
                  $s->updategp();
                  if($msg=="Done")
                    echo('<h5 class="alert alert-success text-center">Group Number: G'.$newgpno.'&nbsp; is created successfully <br/> Other team members should use this number while joining this group</h5>');
                  else
                    echo($msg);
                }
              ?>
              <form method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Group Number</label>
                    <p class="form-control py-2"><?php echo('G'.$newgpno); ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="name">Project Title</label>
                    <input type="text" class="form-control py-2" name="txtname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="name">Brief description</label>
                    <input type="text" class="form-control py-2" name="txtdescription" required>
                  </div>
                </div>
                <div class="row text-center">
                  <div class="col-md-12 form-group">
                    <input type="submit" value="Create" class="btn btn-primary px-5 py-2 w-100" name="btncreate">
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
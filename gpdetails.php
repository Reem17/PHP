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
                include_once "student.php";
                $s=new student();
                $s->setgpno($_GET['gpno']);
                $log1= $s-> checknoofmembers();
                if ($log1->num_rows >= 6)
                {
                    $flag= 1;
                    echo("<h5 class='alert alert-danger'>You can't join this group, This Group is Full</h5>");
                }
                if(isset($_POST["btnjoin"]))
                {
                    $s-> setid($_SESSION['studentid']);
                    $msg=$s-> updategp();
                    if($msg=="Done")
                        echo('<h5 class="alert alert-success">You Joined Group Number: '.$_GET['gpno'].'&nbsp; successfully</h5>');
                    else
                     echo($msg);
                }
                include_once "graduationproject.php";
                $g=new graduationproject();
                $g-> setgpno($_GET['gpno']);
                $log2= $g->checkbygpno();
                if($row2=mysqli_fetch_assoc($log2))
                {
              ?>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="number">Group Number</label>
                    <p class="form-control py-2"><?php echo($_GET['gpno']); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="name">Project Title</label>
                    <p class="form-control py-2"><?php echo($row2['gpname']); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="desc">Brief description</label>
                    <p class="form-control py-2"><?php echo($row2['gpdetail']); ?></p>
                </div>
            </div>
            <?php
                }
                else
                 header('location: pagenotfound.php');
                if ($log1->num_rows > 0)
                {
                  echo ('<div class="row"><div class="col-md-12 form-group"><label for="desc">Team Members</label><div class="form-control py-2">');
                while($row1=mysqli_fetch_assoc($log1))
                {
            ?>
                    <p><?php echo(ucfirst($row1['sfname'])."&nbsp;".ucfirst($row1['smname'])."&nbsp;".ucfirst($row1['slname'])); ?></p>
            <?php
                   }
                 echo ('</div></div></div>');
                }
            ?>

                <form method="post">
                    <div class="row text-center">
                    <div class="col-md-6 form-group text-center">
                        <input type="submit" <?php echo isset($flag)? "disabled" :"";?> value="Join" class="btn btn-primary px-5 py-2 w-15" name="btnjoin">
                    </div>
                    <div class="col-md-6 form-group text-center">
                        <a href="joingroup.php" class="btn btn-primary px-5 py-2 w-50">Back</a>
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
<?php
    include "headerafter.php";
    include_once "professor.php";
    session_start();
    $p= new professor();
    $p-> setemail($_GET["prof"]);
    $log= $p-> checkbyemail();
    if($row=mysqli_fetch_assoc($log))
    {
?>
 <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="images/<?php echo($row['pfname']); ?>.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>                   
                     <?php
                        echo("Professor/ <br/>".ucfirst($row['pfname'])." ");
                        echo(ucfirst($row['plname']));
                     ?>
                </h2>
              </div>
              <div class="text mb-5">
                <p><?php echo($row['briefdata']); ?></p>
              </div>
            </div>
            <div class="text mb-5">
              <a href="downloadcv.php?email=<?php echo($row['pemail']); ?>"><h6> Download Curriculum Vitae </h6></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php 
    }
    else
      header('location: pagenotfound.php');
    ?>

<?php
  $_SESSION['profemail']= $_GET['prof'];
  include_once "prevproj.php";
  $pproj= new prevproj();
  $pproj-> setpemail($_GET["prof"]);
  $log1= $pproj-> selectbypemail();
  if ($log1->num_rows > 0)
  {
    echo ('<div class="container-fluid block-11 element-animate mb-5"><div class="nonloop-block-11 owl-carousel"><h2 class="ml-5">Previous projects:</h2>');
    while($row1=mysqli_fetch_assoc($log1))
    {
       echo('<div class="item">
       <div class="block-19">
       <div class="text text-center">
        <h3 class="heading"><a href="prevprojdownload.php?proj='.$row1['projectno'].'">'.$row1['title'].'</a></h3>
        <p class="mb-4">'.$row1['description'].'</p>
        <a href="downloadprevproj.php?proj='.$row1['projectno'].'" class="btn btn-outline-primary px-5 py-2">Download Project</a>
        </div>
        </div>
        </div>');
    }
    echo ('</div></div>');
  }
?>
    <div class="container">
      <form method="post">
      <div class="row">
          <div class="col-6 form-group">
          <a href="creategroup.php" class="btn btn-primary px-5 py-2 float-left" name="btncreate">Create Group</a>
          </div>
          <div class="col-6 form-group">
          <a href="joingroup.php" class="btn btn-primary px-5 py-2 float-right" name="btnjoin">Join Group</a>
          </div>
      </div>
     </form>
    </div>
<?php
  include "footer.php";
?>
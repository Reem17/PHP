<?php
    include "headerafter.php";
    include_once "field.php";
    $fd= new field();
    $fd-> setfdno($_GET["fdno"]);
    $log1= $fd-> selectbyfdno();
    if($row1=mysqli_fetch_assoc($log1))
    {
?>
        <div class="container">
          <div class="row">
          <div class="col-md-12">
          <br/>
          <h1 class="text-center"><?php echo($row1['fdname']); ?></h1>
            <div class="accordion block-8" id="accordion">
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Field Details<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p><?php echo($row1['fddetails']); ?></p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Field Requirements<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>
                    <?php
                      echo($row1['fdrequirements']); 
                     } 
                     else
                      header('location: pagenotfound.php'); 
                     ?></p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Field Courses<span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                  <?php 
                    include_once "course.php";
                    $course= new course();
                    $course-> setfieldno($_GET["fdno"]);
                    $log2= $course->selectdatafromfno();
                    while($row2=mysqli_fetch_assoc($log2))
                    {
                  ?>
                  <a href="#"><p><?php echo($row2['cname']); }?></p></a>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Field Jobs<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <?php 
                    include_once "jobs.php";
                    $job= new jobs();
                    $job-> setfieldno($_GET["fdno"]);
                    $log3= $job-> selectdatafromfno();
                    while($row3=mysqli_fetch_assoc($log3))
                    {
                  ?>
                  <a href="#"><p><?php echo($row3['jobtitle']); }?></p></a>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
             </div>
          </div>
        </div>
        <br/>
        <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
        <h6 class="text-dark">Field Professors</h6>
          <?php 
            include_once "professor.php";
            $prof= new professor();
            $prof-> setfdno($_GET["fdno"]);
            $log4= $prof-> selectdatabyfdno();
            while($row4=mysqli_fetch_assoc($log4))
            {
          ?>
            <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/<?php echo($row4['pfname']); ?>.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <p class="mb-4">
                    <?php
                         echo("Professor/ ".ucfirst($row4['pfname'])." ");
                         echo(ucfirst($row4['plname']));
                    ?>
                  </p>
                  <a href="http://localhost/university/profdetails.php?prof=<?php echo($row4['pemail']); ?>" class="btn btn-primary px-5 py-2">Register</a>
                </div>
              </div>
          </div>
          <?php } ?>
          </div>

         </div>
      </div>
    </div>

<?php
  include "footer.php";
?>
<?php
    include "headerafter.php";
?>
 <div class="container-fluid block-11 element-animate">
   <div class="nonloop-block-11 owl-carousel">
<?php
    include_once "field.php";
    $fd= new field();
    $log= $fd-> selectall();
    while($row=mysqli_fetch_assoc($log))
    {
?>
        <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="fielddetails.php"><?php echo($row['fdname']); ?> </a></h2>
                  <p class="mb-4"><?php $t=$row['fddetails']; $s=substr((string)$t,0,35); echo($s);?></p>
                  <a href="http://localhost/university/fielddetails.php?fdno=<?php echo($row['fdno']); ?>" class="btn btn-primary px-5 py-2">View Details</a>
                </div>
              </div>
          </div>
          <?php
              }
          ?>
         </div>
      </div>
    </div>
<?php
    include "footer.php";
?>
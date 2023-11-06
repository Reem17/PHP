<?php
	ob_start(); 
    include "header.php";
    require_once "src/PHPMailer.php";
    require_once "src/Exception.php";
    require_once "src/SMTP.php";
    require_once "vendor/autoload.php";
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
              <h2 class="mb-4">Forget Code</h2>
              <?php	 
                if(isset($_POST['btnactcode']))
                {
                		include_once "student.php";
                		$s=new student();
                        $s->setemail($_POST['txtemail']);
                        $activationcode;
                        $log= $s->forgetcode();
                		if($row=mysqli_fetch_assoc($log))
                		{
                			 //generate random and send email
                             $activationcode= rand(1111,9999);
                             $link="http://localhost/university/updatecode.php?em=".$_POST['txtemail'];
                            
    
                             $mail = new  PHPMailer\PHPMailer\PHPMailer();
        
                                $mail->IsSMTP();
                                //$mail->SMTPDebug = 1;
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'ssl';
                                $mail->Host = "smtp.gmail.com";
                                $mail->Port = 465; // or 587
                                $mail->IsHTML(true);
    
                                $mail->Username = "yourmobileapp2017@gmail.com";
                                $mail->Password = "ABC@123456b";
    
                                $mail->setFrom('yourmobileapp2017@gmail.com', 'University');
                                $mail->addAddress($_POST['txtemail'], "nn");
                            
                                
                                $mail->Subject = 'Forget Student code (University)';
                                $mail->Body = "Dear Student, Your Activation Code is".$activationcode ."please  visit this link ".$link;
                                
                                if(!$mail->send()) 
                                {
                                    echo "Opps! For some technical reasons we aren't able to sent you an email.";	
                                    echo "Mailer Error: " . $mail->ErrorInfo;
                                }
                                 else 
                                {
                                    $_SESSION['activationcode']=$activationcode;
                                    echo("<h4 class='alert alert-success'>Message has been sent , Please check your email </h4>");
                                }
                            
                		}
                		else
                			echo("<h4 class='alert alert-danger'>Sorry This email  doesnot exist </h4>");
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
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Send Activation Code" class="btn btn-primary px-5 py-2" name="btnactcode">
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
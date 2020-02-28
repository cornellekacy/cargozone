<?php include 'header.php'; ?>
    <!-- Header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-xl-9 col-lg-8 col">
                            <?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
 $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
      $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('contact@petflyrelocation.com', $_POST['name']);
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('cornellekacy4@gmail.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Cargo Zone Logistics';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Phone Number: {$_POST['phone']}
Subject: {$_POST['subject']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<script>alert('Message Successfully Sent we will get back to you shortly');
            window.location.href = 'contact.php'</script>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}

?>
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
							<h3>Contact form</h3>
                            <form method="post"  action="">
                                <input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                         <label>Full Name</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
											
												<input name="name" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <label>Email</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
												
                                                <input name="email" type="email" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                         <label>Phone Number</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
                                            
                                                <input name="phone" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <label>Subject</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                
                                                <input name="subject" type="text" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Message</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
											
                                                <textarea name="message" rows="4" class="form-control" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
								
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button"> 
											<span>Submit</span> 
										</button>
                                        <button name="Resat" type="reset" value="Reset" class="site-button m-l30"> 
											<span>Reset</span> 
										</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-xl-3 col-lg-4">
                        <div class="p-a30 bg-white m-b30">
							<h3>Contact Info</h3>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Address</h6>
                                        <p>3127  Doctors Drive, Los Angeles<br>
                                            California</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p>cargozonelogistics@<br>gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
  
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
  <?php include 'footer.php'; ?>
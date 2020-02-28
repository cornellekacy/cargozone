<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
 <div class="page-wrapper">
<div class="row">
    <div class="col-md-2">
        
    </div>
    <div class="col-md-8">
                                   
<?php
include 'conn.php';
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  if(isset($_POST['save'])){
       $email = mysqli_real_escape_string($link,$_POST['email']);

     }
// Close connection
mysqli_close($link);
?>

<?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
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
    $mail->setFrom($email, 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('cornellekacy4@gmail.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Shifter Transport Logistics';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
sender name: {$_POST['name']}
receiver's name: {$_POST['jname']}
receiver's name: {$_POST['email']}
Tracking Number: {$_POST['tracking']}
Message: 'HELLO {$_POST['jname']}, IF YOU ARE RECEIVING THIS MASSAGE, IT MEANS A SHIPMENT WAS SUCCESSFULY PLACES IN OUR AGENCY USING YOUR DETAILS. COPY THE TRACKING NUMBER ABOVE AND GO TO logisticsproshipping.com/tracking.php TO TRACK YOUR SHIPMENT'
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>

<!-- 
<?php
require_once "Mail.php";
if (array_key_exists('email', $_POST)) {
$from = "Logisticsproshipping";
$to = $email;
$subject = "Message from Logisticsproshipping.com";
$body = <<<EOT
sender name: {$_POST['name']}
receiver's name: {$_POST['jname']}
receiver's name: {$_POST['email']}
Tracking Number: {$_POST['tracking']}
Message: 'HELLO {$_POST['jname']}, IF YOU ARE RECEIVING THIS MASSAGE, IT MEANS A SHIPMENT WAS SUCCESSFULY PLACES IN OUR AGENCY USING YOUR DETAILS. COPY THE TRACKING NUMBER ABOVE AND GO TO logisticsproshipping.com/tracking.php TO TRACK YOUR SHIPMENT'
EOT;
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "cornellekacy4@gmail.com";
$password = "cornellekacy456";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<script>alert('Message Successfully Send, you will receive a reply from us shortly')</script>");
 }
}
?> -->
                                    <div class="card-header">
                                        <strong>Send Tracking Number To Jk Through Mail</strong> More Professional
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Your Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Please enter your Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">jk's Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="jname" placeholder="Please enter jk's Name" class="form-control">
                                              
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">JK's Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="username" name="email" placeholder="Please enter JK's Email" class="form-control">
                
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="number" class=" form-control-label">Tracking Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password" name="tracking" placeholder="Please enter Tracking Number" class="form-control">
                                       
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" id="password" value="<?php echo $_SESSION['username'] ?>" name="user" placeholder="Please enter Tracking Number" class="form-control">
                                       
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="save" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Send
                                        </button>
                                        </form>
                                    </div>
                                </div> 
    </div>
    <div class="col-md-2">
        
    </div>
</div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php include 'footer.php'; ?>
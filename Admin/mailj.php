<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
   
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-title">
                                <strong>Send Tracking Number To Jk Through Mail</strong> More Professional


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
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
     // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.yandex.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contact@petflyrelocation.com";
//Password to use for SMTP authentication
$mail->Password = "petflyrelocation45";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('contact@petflyrelocation.com', $_POST['name']);
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress($_POST['email'], $_POST['name']);
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], 'Petfly Relocation')) {
        $mail->Subject = 'Petfly Relocation';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
sender name: {$_POST['name']}
receiver's name: {$_POST['jname']}
receiver's name: {$_POST['email']}
Tracking Number: {$_POST['tracking']}
Message: 'HELLO {$_POST['jname']}, IF YOU ARE RECEIVING THIS MASSAGE, IT MEANS A SHIPMENT WAS SUCCESSFULY PLACES IN OUR AGENCY USING YOUR DETAILS. COPY THE TRACKING NUMBER ABOVE AND GO TO http://petflyrelocation.com/track.php TO TRACK YOUR SHIPMENT'
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
             echo "<script>alert('Message Successfully Sent we will get back to you shortly');
             window.location.href = 'mailj.php'</script>";
            
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}

?>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                                            <?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
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
                        </div>

                    </div>
                    <div class="col-md-3">
   
                    </div>
                </div>







                <!-- End PAge Content -->
<?php include 'footer.php'; ?>
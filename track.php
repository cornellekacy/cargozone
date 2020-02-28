<?php include 'header.php'; ?>

    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Track Your Package</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li>Tracking Package</li>
                </ul>
            </div>
        </div>

<div class="container">
    <div class="row">
       <div class="col-1">
           
       </div> 
       <div class="col-10">
              
                            <h3>Enter Your Tracking Number Here</h3>
                             <div class="p-a30 bg-white clearfix m-b30">
                        <form method="post">
  <div class="form-group">
    <input type="text" name="term" class="form-control" id="email">
  </div>

  <button type="submit" name="save" class="site-button">Track Package</button>
</form>
                        
       </div> 
       <div class="col-1">
           
       </div> 
    </div>
</div>
</div>
<div class="container">
    

        <?php
        include 'Admin/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['save'])){
            $name = $_POST['term'];
            if (empty($name)) {
                echo "<div class='alert alert-danger'>
                <strong>Failed!</strong> Tracking Id Cannot Be Empty.
                </div>";
            }else{

                $sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
                $result = mysqli_query($link, $sql);

                if (mysqli_num_rows($result) > 0) {
    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {?> 
                        <h3 align="center">Tracking information for tracking number <?php echo $row["ship_id"] ?></h3>
                        <div class="row">
                        <div class="col-md-6">
                            <h3 align="center">RECEIVERS DETAILS</h3><br>
                            <div class="table-responsive">
                                <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> NAME:</b></a> </div>
                                            </td> 
                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

                                        </tr>
                                        <tr>

                                            <tr>
                                                <td>
                                                    <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                                </td>
                                                <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                                </td>
                                                <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Number:</b></a> </div>
                                                </td>
                                                <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Email:</b></a> </div>
                                                </td>
                                                <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div><br>
                            </div>

                            <div class="col-md-6">
                                <h3 align="center">SENDER's DETAILS</h3><br>
                                <div class="table-responsive">
                                    <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> NAME:</b></a> </div>
                                                </td> 
                                                <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

                                            </tr>
                                            <tr>

                                                <tr>
                                                    <td>
                                                        <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                                                    </td>
                                                    <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                                                    </td>
                                                    <td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Number:</b></a> </div>
                                                    </td>
                                                    <td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Email:</b></a> </div>
                                                    </td>
                                                    <td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><br>
                                </div>
                            </div>
                            <div class="row">
                                
                            
                                <div class="col-md-6">
                                    <h3 align="center">SHIPMENT DETAILS</h3><br>
                                    <div class="table-responsive">
                                        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
                                                    </td> 
                                                    <td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

                                                </tr>
                                                <tr>

                                                    <tr>
                                                        <td>
                                                            <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PRODUCT <br> NAME:</b></a> </div>
                                                        </td>
                                                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRACKING<br> NUMBER:</b></a> </div>
                                                        </td>
                                                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> STATUS:</b></a> </div>
                                                        </td>
                                                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
                                                        </td>
                                                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 align="center">PACKAGE DETAILS</h3><br>
                                        <div class="table-responsive">
                                            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
                                                        </td> 
                                                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

                                                    </tr>
                                                    <tr>

                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DEPARTURE<br> DATE:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> DATE:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
                                                            </td>
                                                            <td style="color: #fff; text-transform: uppercase;"><?php echo $row["status"] ?></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><br>
                                        </div>
                                        </div>


                                        <!-- <body > -->
                                            <br><br>

                                            <?php       
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>
                                        <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
                                        </div>";
                                    }
                                }
                            }

                            ?>


                    
                    </div> 

        </div>
<?php include 'footer.php'; ?>
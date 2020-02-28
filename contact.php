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
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
							<h3>Contact form</h3>
                            <form method="post" class="dzForm" action="https://cargozone.dexignlab.com/xhtml/script/contact.php">
                                <input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-user"></i>
													</span>
												</div>
												<input name="dzName" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-envelope"></i>
													</span>
												</div>
                                                <input name="dzEmail" type="email" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
												<div class="input-group-prepend v-align-t">
													<span class="input-group-text">
														<i class="fa fa-pencil"></i>
													</span>
												</div>
                                                <textarea name="dzMessage" rows="4" class="form-control" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
										<div class="g-recaptcha-bx">
											<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" name="recaptcha" data-recaptcha="true" required data-error="Please complete the Captcha">
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
                                        <p>cargozonelogistics@gmail.com</p>
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
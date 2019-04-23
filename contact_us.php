<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower/');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_URL", ROOT_URL.'/Dashboard/');
define("LOADER", APP_URL.'App/Views/Utils/classes_loader.php');
define("APP_NAME", 'Aroma Florist');
require LOADER;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="robots" content="noindex, follow" />

	<title>Contact Us <?php echo APP_NAME; ?> || Flower Delivery Services </title>
	<?php include VIEWS.'Utils/style.php'; ?>  
</head>

<body>
<?php include VIEWS.'Utils/header.php'; ?>
	<!-- Start contact ====
    	======================================= -->
	<div class="page-contact">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="heading-contact text-center">
						<h2 class="text-uppercase">get in touch WITH us</h2>
					</div>
				</div>
				<div class="col-md-5">
				    <div class="tab-content features skin1">
				    	<div id="tab_contact1" class="tab-pane fade in active">
							<div class="items_group clearfix">
								<div class="features_list list_item clearfix">
			                        <div class="features-images">
			                           <img src="assets/images/icon_phone.png" alt="">
			                        </div>
			                        <div class="features-description">
			                            <h4>Call Us</h4>
			                            <p>
			                            	Feel free to call us on Phone: (250) 788894240,<br/>
											Monday - Friday, 8am - 7pm
										</p>
			                        </div>
			                    </div>
			                    <div class="features_list list_item clearfix">
			                        <div class="features-images">
			                           <img src="assets/images/icon_mail.png" alt="">
			                        </div>
			                        <div class="features-description">
			                            <h4>Drop a Line</h4>
			                            <p>
			                            	Drop us a line at  <strong><a href="mailto:info@arumusflowerdelivery.rw"> info@aromaflorist.rw</a> </strong>,
			                            	<br/>and we’ll get back soon.
										</p>
			                        </div>
			                    </div>
			                    <div class="features_list list_item clearfix">
			                        <div class="features-images">
			                           <img src="assets/images/location.png" alt="">
			                        </div>
			                        <div class="features-description">
			                            <h4>Visit Us</h4>
			                            <p>
			                            	Address: <strong>KN2 ave</strong> , Kigali near by National Institute of statistics
										</p>
			                        </div>
			                    </div>
		                    </div>
		                </div>
	                </div>
				</div>
				<div class="col-md-7">
					<div class="row">
						<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
							<div class="form-group col col-md-6"> 
								<input type="text" name="author" class="form-control" placeholder="Full Name: " id="author" value="" aria-required="true">
							</div>
							<div class="form-group col col-md-6"> 
								<input type="text" name="email" class="form-control" placeholder="Email address: " id="email" value="" aria-required="true">
							</div>
							<div class="form-group col col-md-12"> 
								<input type="text" name="phone" class="form-control" placeholder="Your Phone: " id="phone" value="" aria-required="true">
							</div>
							<div class="form-group  col col-md-12">
								<textarea rows="8" id="comment" class="form-control" placeholder="Message..*" name="comment" aria-required="true"></textarea>
							</div>
							<div class="form-submit col col-md-12">
								<input name="submit" type="submit" id="submit" class="btn btn-primary" value="Send"> 
								<input type="hidden" name="comment_post_ID" value="" id="comment_post_ID"> 
								<input type="hidden" name="comment_parent" id="comment_parent" value="">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-12" style="display: block;">
					<div class="map pt-10 pb-10">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.523446186336!2d30.058701014754806!3d-1.9433960985831646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwNTYnMzYuMiJTIDMwwrAwMyczOS4yIkU!5e0!3m2!1sen!2srw!4v1555924454835!5m2!1sen!2srw" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	            	</div>
				</div>

				
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- End contact ====
    	======================================= -->
    <?php include VIEWS.'Utils/footer.php'; ?>

   	<!-- back-to-top-->
    <div id="back-to-top"></div>
    <!-- back-to-top -->
     

    <!-- =====================================
    	====Start preloader -->
    <div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
<?php include VIEWS.'Utils/script.php'; ?>    
     
</body>
</html>
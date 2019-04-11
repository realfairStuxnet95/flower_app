<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'flower/');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_URL", ROOT_URL.'/Dashboard/');
define("LOADER", APP_URL.'App/Views/Utils/classes_loader.php');
define("APP_NAME", 'Arums Flowers');
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

	<title>Welcome to <?php echo APP_NAME; ?> || Flower Delivery Services </title>
	<?php include VIEWS.'Utils/style.php'; ?>  
</head>

<body>
	<?php include VIEWS.'Utils/header.php'; ?>
	<section class="section-main-slider">
		<div class="main-slider my-slider slider-pro skin2" id="my-slider-1" data-slider-width="100%" data-slider-height="670">
		    <div class="sp-slides">
		        <!-- Slide 1 -->
		       	<div class="sp-slide section-bg" style="background-image:url(assets/images/slider/home3_slider1.jpg)">
		           		<span class="sp-layer main-slider__img" data-horizontal="0" data-vertical="100"  data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
							<img class="img-responsive" src="assets/images/slider/home3_slider1.png" height="593" alt="">
						</span>

						<div style="display: none;" class="sp-layer main-slider__text btn-sale text-white font-bold section-bg hidden-xs hidden-sm" data-horizontal="35%" data-vertical="140"  data-show-transition="up" data-hide-transition="left" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200" style="background-image:url(assets/images/slider/home3_slider1_3.png)">
		                    <span class="btn-sale__title">-ONLY-</span>
							<span class="btn-sale__price">$56.89</span>
				        </div>


				        <h2 class="sp-layer main-slider__title font-italic" data-horizontal="50%" data-vertical="120" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
							Arums
						</h2>
						<h2 class="sp-layer main-slider__title color-primary font-bold hidden-md" data-horizontal="50%" data-vertical="210" data-show-transition="up" data-hide-transition="left" data-show-duration="900" data-show-delay="900" data-hide-delay="900">
							Flowers Delivery
						</h2>
				        <div class="sp-layer main-slider__text" data-horizontal="50%" data-vertical="320"  data-show-transition="up" data-hide-transition="left" data-show-duration="1000" data-show-delay="1000" data-hide-delay="1000">
				            <p class="hidden-xs">
				           		 We Deliver The Beauty From Nature.
							</p>
				            <div class="main-slider__btn-group">
				                <a class="mt-40 btn btn-features btn-primary btn-radius" href="flowers-list">Shop now <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
				            </div>
				        </div>
				        <span class="sp-layer main-slider__img" data-horizontal="80%" data-vertical="500"  data-show-transition="up" data-hide-transition="right" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200">
							<img style="display: none;" class="img-responsive" src="assets/images/slider/home3_slider1_8.png" height="87" width="198" alt="">
						</span>
				</div>
		        <!-- end sp-slide -->


		        <!-- Slide 2-->
		       	<div class="sp-slide section-bg" style="background-image:url(assets/images/slider/home3_slider2.jpg)">
			        <h2 class="sp-layer main-slider__title font-italic text-center" data-horizontal="50%" data-vertical="120" data-show-transition="up" data-hide-transition="center" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
						Arums
					</h2>
					<h2 class="sp-layer main-slider__title color-primary font-bold  text-center" data-horizontal="50%" data-vertical="210" data-show-transition="up" data-hide-transition="center" data-show-duration="900" data-show-delay="900" data-hide-delay="900">
						Flowers Delivery
					</h2>
			        <div class="sp-layer main-slider__text text-center" data-horizontal="50%" data-vertical="310"  data-show-transition="up" data-hide-transition="center" data-show-duration="1000" data-show-delay="1000" data-hide-delay="1000">
			            <p class="hidden-xs">
			           		 We Deliver The Beauty From Nature.
						</p>
			            <div class="main-slider__btn-group">
			                <a class="mt-40 btn btn-features btn-primary btn-radius" href="flowers-list">Shop now <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
			            </div>
			        </div>
			        <div style="display: none;" class="sp-layer main-slider__text btn-sale text-white font-bold section-bg hidden-xs hidden-sm" data-horizontal="72%" data-vertical="120"  data-show-transition="up" data-hide-transition="left" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200" style="background-image:url(assets/images/slider/home3_slider1_3.png)">
		                    <span class="btn-sale__title">-ONLY-</span>
							<span class="btn-sale__price">$56.89</span>
				        </div>
				</div>
		        <!-- end sp-slide -->
		    </div>
		</div>
	</section>
	<?php include VIEWS.'Home/product_grid.php'; ?>
	<?php //include VIEWS.'Home/intro.php'; ?>
	<?php //include VIEWS.'Home/second.php'; ?>	
	<?php //include VIEWS.'Home/third.php'; ?>	
	<?php //include VIEWS.'Home/fourth.php'; ?>
	<?php //include VIEWS.'Home/fifth.php'; ?>
	<?php include VIEWS.'Utils/footer.php'; ?>
    <div id="back-to-top"></div>
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
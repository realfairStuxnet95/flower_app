<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'flower/');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_URL", ROOT_URL.'/Dashboard/');
define("LOADER", APP_URL.'App/Views/Utils/classes_loader.php');
define("APP_NAME", 'ArumsFlower');
require LOADER;
if(isset($_GET['numbering']) && $_GET['numbering']!=''){
	if(isset($_GET['product']) && isset($_GET['description']) && isset($_GET['price']) && isset($_GET['items']) && isset($_GET['comment'])){
		//get flower information
		$flower_id=$function->sanitize($_GET['numbering']);
		$name=$function->sanitize($_GET['description']);
		$price=$function->sanitize($_GET['price']);
		$items=$function->sanitize($_GET['items']);
		$comment=$function->sanitize($_GET['comment']);
		$flowerDetails=$admin->getFlowerDetails($flower_id);
		$flower_images=$admin->load_images($flower_id);
	}else{
		backHome();
	}
}else{
	backHome();
}
function backHome(){
	header("Location:index");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="robots" content="noindex, follow" />

	<title><?php echo $name; ?> || <?php echo APP_NAME; ?></title>
	<?php include VIEWS.'Utils/style.php'; ?>  
</head>

<body>
	<?php include VIEWS.'Utils/header.php'; ?>
   	<div class="breadcrumb">
   		<!-- container -->
		<div class="container">
			<h1><?php echo $name; ?></h1>
			<ol class="item-breadcrumb">
	            <li><a href="index">Home</a></li>
	            <li><a href="index#productsDiv">Flowers</a></li>
	            <li><?php echo $name; ?></li>   
            </ol>
		</div>
		<!-- /container -->
   	</div>
    <!-- =====================================
    	==== End breadcrumb -->


	<!-- =====================================
    	==== Start single-product -->
	<div class="single-product">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<div class="product-info">
					<div class="col-md-6">
						<div class="row">
	                        <ul class="featuredPostSlider col-md-10 col-sm-11">
	                        	<?php 
	                        	foreach ($flower_images as $key => $image){
	                        		?>
				                     <li>
				                        <img class="product-featured-image product_selector_1" src="Dashboard/upload/<?php echo $image['image_path']; ?>" alt="">
				                    </li> 
	                        		<?php
	                        	}
	                        	?>
	                   		</ul>
		                    <div id="slick-page">
			                    <div class="pagerNavigation pagerNavigationTop">
			                        <span class="top"><i class="fa fa-angle-up"></i></span>                        
			                    </div>                    
			                    <div class="slick-pager">
			                    	<?php 
			                    	foreach ($flower_images as $key => $image){
			                    		?>
				                      	<a data-slide-index="1" href="javascript:void(0)">    
				                      	  <img class="product-featured-image" src="Dashboard/upload/<?php echo $image['image_path']; ?>" alt="">                   
				                      	</a>
			                    		<?php
			                    	}
			                    	?>			                      
			                    </div>
			                    <div class="pagerNavigation pagerNavigationBottom">                        
			                        <span class="bottom"><i class="fa fa-angle-down"></i></span>
			                    </div>
			                </div>
		                </div>
			 		</div>
			 		<div class="col-md-6">
						<div class="product-meta clearfix">
							<span class="product-rating" data-rating="">
								<span class="star-rating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span>
							<!-- end rating -->
							<h4 class="product-name">
								<a href="#" title="">
									<?php echo $name; ?>
								</a>
							</h4><!-- /.product-product -->

							<div class="product-price">
								<span class="amout">
									<span><span class="money" data-currency-usd="<?php echo $price.' RWF'; ?>"><?php echo $price.' RWF'; ?></span></span>
								</span>
							</div><!-- /.product-price -->
							<div class="excerpt">
								<?php echo $comment; ?>          
						    </div>

                            <table class="variations">
                            	<tbody>
                            		<tr>
                            			<td class="label"><label>Color:</label></td>
                            			<td class="value">
                            				<div class="tawcvs-swatches color_selector" data-attribute_name="attribute_pa_color">
                            					<span class="swatch swatch-color swatch-blue" title="Blue" data-value="blue">Blue</span>
                            					<span class="swatch swatch-color swatch-green" title="Green" data-value="green">Green</span>
                            					<span class="swatch swatch-color swatch-orange" title="orange" data-value="orange">orange</span>
                            					<span class="swatch swatch-color swatch-purple" title="Purple" data-value="purple">Purple</span>
                            					<span class="swatch swatch-color swatch-red" title="Red" data-value="red">Red</span>
                            				</div>
                            			</td>
                            		</tr>
                            	</tbody>
                            </table>

						    <div class="product-footer">
								<form action="#" class="add-to-cart" method="post" enctype="multipart/form-data">
									<input class="cart-qty-box" type="number" name="qtybutton" value="0">
									<input type="hidden" name="id" value="">
								</form>
								<a href="cart.html" class="btn btn-primary">Add to Cart<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
								</div>
							</div>
							<div class="social-sharing">
								<h6 class="text-uppercase">Share:</h6>
                                <a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div><!-- /.product-meta -->
			 		</div>
			 	</div>
			 	<!-- product-tab-description -->
			 	<div class="col-md-12 product-description-tabs">
	                <ul class="nav">
					    <li class="active"><a data-toggle="tab" href="#tab_reviews">Reviews</a></li>
					</ul>
					<div class="tab-content">
					    <div id="tab_reviews" class="tab-pane fade in active">
					    	<?php include VIEWS.'Product/load_reviews.php'; ?>
				            <?php include VIEWS.'Product/add_review.php'; ?>
					    </div>    
					</div>
			 	</div>
			 	<!--/product-tab-description -->
	 		</div>
	 	</div>
	</div>
	<!-- =====================================
    	==== End single-product -->

	<!-- =====================================
    	==== Start up-sells -->
	<div class="up-sells pt-20">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<div class="col-md-12">
					<div class=" up-sells_content pt-30">
						<h3 class="theme-heading">You May Also Like</h3>
						<div class="product products-grid">
							<div class="owl-carousel owl-theme" data-pagination="true" data-nav="flase" data-items="3" data-large="3" data-medium="3" data-smallmedium="2" data-extrasmall="1" data-verysmall="1" data-autoplay="true">
			            		<div class="item">
			            			<div class="product-block" data-publish-date="">
										<div class="product-image ">
											<div class="product-thumbnail">
												<a href="product_single.html" title="">
													<img class="product-featured-image" src="assets/images/product/product_4.jpg" alt="">
												</a>
											</div>
											<div class="product-actions">
												<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
												<i class="fa fa-heart-o"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
												    <i class="fa fa-eye"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
												    <i class="fa fa-retweet"></i>
												</a>
											</div>
										</div><!-- /.product-image -->
										<div class="product-meta">
											<span class="product-rating" data-rating="">
												<span class="star-rating">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</span>
											<!-- end rating -->
											<h4 class="product-name">
												<a href="product_single.html" title="">
													Sport Standard edition
												</a>
											</h4>
											<div class="product-price">
												<span class="amout">
													<span class="money" data-currency-usd="$700.00">$700.0</span>
												</span>
												<a href="product_single.html" class="add_to_cart_button">Add to Cart</a>
											</div>
										</div><!-- /.product-meta -->
									</div>
			            		</div>
			            		<div class="item">
			            			<div class="product-block" data-publish-date="">
										<div class="product-image ">
											<div class="product-thumbnail">
												<a href="product_single.html" title="">
													<img class="product-featured-image" src="assets/images/product/product_1.jpg" alt="">
												</a>
											</div>
											<div class="product-actions">
												<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
												<i class="fa fa-heart-o"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
												    <i class="fa fa-eye"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
												    <i class="fa fa-retweet"></i>
												</a>
											</div>
										</div><!-- /.product-image -->
										<div class="product-meta">
											<span class="product-rating" data-rating="">
												<span class="star-rating">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</span>
											<!-- end rating -->
											<h4 class="product-name">
												<a href="product_single.html" title="">
													Casual Premium edition
												</a>
											</h4>
											<div class="product-price">
												<span class="amout">
													<span class="money" data-currency-usd="$700.00">$700.0</span>
												</span>
												<a href="product_single.html" class="add_to_cart_button">Add to Cart</a>
											</div>
										</div><!-- /.product-meta -->
									</div>
			            		</div>
			            		<div class="item">
			            			<div class="product-block" data-publish-date="">
										<div class="product-image ">
											<div class="product-thumbnail">
												<a href="product_single.html" title="">
													<img class="product-featured-image" src="assets/images/product/product_5.jpg" alt="">
												</a>
											</div>
											<div class="product-actions">
												<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
												<i class="fa fa-heart-o"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
												    <i class="fa fa-eye"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
												    <i class="fa fa-retweet"></i>
												</a>
											</div>
										</div><!-- /.product-image -->
										<div class="product-meta">
											<span class="product-rating" data-rating="">
												<span class="star-rating">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</span>
											<!-- end rating -->
											<h4 class="product-name">
												<a href="product_single.html" title="">
													Gold Limited edition
												</a>
											</h4>
											<div class="product-price">
												<span class="amout">
													<span class="money" data-currency-usd="$700.00">$700.0</span>
												</span>
												<a href="product_single.html" class="add_to_cart_button">Add to Cart</a>
											</div>
										</div><!-- /.product-meta -->
									</div>
			            		</div>
			            		<div class="item">
			            			<div class="product-block" data-publish-date="">
										<div class="product-image ">
											<div class="product-thumbnail">
												<a href="product_single.html" title="">
													<img class="product-featured-image" src="assets/images/product/product_6.jpg" alt="">
												</a>
											</div>
											<div class="product-actions">
												<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
												<i class="fa fa-heart-o"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
												    <i class="fa fa-eye"></i>
												</a>
												<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
												    <i class="fa fa-retweet"></i>
												</a>
											</div>
										</div><!-- /.product-image -->
										<div class="product-meta">
											<span class="product-rating" data-rating="">
												<span class="star-rating">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</span>
											<!-- end rating -->
											<h4 class="product-name">
												<a href="product_single.html" title="">
													Casual Premium edition
												</a>
											</h4>
											<div class="product-price">
												<span class="amout">
													<span class="money" data-currency-usd="$700.00">$700.0</span>
												</span>
												<a href="product_single.html" class="add_to_cart_button">Add to Cart</a>
											</div>
										</div><!-- /.product-meta -->
									</div>
			            		</div>
			            	</div>
					 	</div>
					 </div>
		 		</div>
	 		</div>
	 	</div>
	</div>
	<!-- =====================================
    	==== End up-sells -->
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
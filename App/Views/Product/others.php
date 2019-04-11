<?php 
$flowers_not=$admin->loadOtherFlowers($flower_id);
?>
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
							<?php 
							foreach ($flowers_not as $key => $value) {
								$flower_url='flower?product='.$admin->generateHash().'&description='.$value['name'].'&price='.$value['price'].'&items='.$value['items'].'&numbering='.$value['id'].'&comment='.$value['description'];
								?>
			            		<div class="item">
			            			<div class="product-block" data-publish-date="">
										<div class="product-image ">
											<div class="product-thumbnail">
												<a href="<?php echo $flower_url; ?>" title="">
													<img class="product-featured-image" src="Dashboard/upload/<?php echo $value['poster']; ?>" alt="">
												</a>
											</div>
										</div><!-- /.product-image -->
										<div class="product-meta">
											<!-- end rating -->
											<h4 class="product-name">
												<a href="<?php echo $flower_url; ?>" title="">
													<?php echo $value['name']; ?>
												</a>
											</h4>
											<div class="product-price">
												<span class="amout">
													<span class="money" data-currency-usd="<?php echo $value['price'].' RWF'; ?>">
														<?php echo $value['price'].' RWF'; ?>
													</span>
												</span>
												<a href="<?php echo $flower_url; ?>" class="add_to_cart_button">View Flower Details</a>
											</div>
										</div><!-- /.product-meta -->
									</div>
			            		</div>
								<?php
							}
							?>
		            	</div>
				 	</div>
				 </div>
	 		</div>
 		</div>
 	</div>
</div>
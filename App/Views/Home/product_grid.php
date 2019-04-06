<?php 
$flowers=$admin->loadPublicFlowers();
?>
<div id="productsDiv" class="container" style="padding: 10px;">
	<div class="product-shorting d-flex align-items-center justify-content-between">
		<div class="grid-list-view">
	        <ul class="nav tabs-area">
	            <li class="active">
	            	<a data-toggle="tab" href="#grid-view">
	                	<i class="fa fa-th"></i>
	                </a>
	            </li>
	            <li>
	            	<a data-toggle="tab" href="#list-view" class="">
	            		<i class="fa fa-list-ul"></i>
	            	</a>
	            </li>
	        </ul>
	        <span class="show-items">Showing 1 to 9</span>
	    </div>
	    <div class="toolbar-sorter">
	        <select name="orderby" class="orderby">
				<option value="menu_order" selected="selected">Default sorting</option>
				<option value="popularity">Sort by popularity</option>
				<option value="rating">Sort by average rating</option>
				<option value="date">Sort by newness</option>
				<option value="price">Sort by price: low to high</option>
				<option value="price-desc">Sort by price: high to low</option>
			</select>
	    </div>
	</div>
	<div class="tab-content">
		<div id="grid-view" class="tab-pane fade in active">
			<div class="product products-grid">
				<div class="row row-products">   
					<?php 
					foreach ($flowers as $key => $value) {
						$flower_url='flower?product='.$admin->generateHash().'&description='.$value['name'].'&price='.$value['price'].'&items='.$value['items'].'&numbering='.$value['id'].'&comment='.$value['description'];
						?>
			 			<div class="col-md-4 col-sm-6">
			 				<div class="product-block" data-publish-date="">
								<div class="product-image product_1">
									<div class="product-thumbnail">
										<a href="<?php echo $flower_url; ?>ngle.html" title="">
											<img class="product-featured-image" src="Dashboard/upload/<?php echo $value['poster']; ?>" alt="">
										</a>
									</div>
									<div class="tawcvs-swatches color_selector" data-attribute_name="attribute_pa_color" style="display: none;">
			        					<span class="swatch swatch-color swatch-blue" title="Blue" data-value="blue">Blue</span>
			        					<span class="swatch swatch-color swatch-orange" title="Orange" data-value="orange">orange</span>
			        					<span class="swatch swatch-color swatch-purple" title="Purple" data-value="purple">Purple</span>
			        				</div>
									<div class="product-actions">
										<a href="<?php echo $flower_url; ?>" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
										<i class="fa fa-heart-o"></i>
										</a>
										<a href="<?php echo $flower_url; ?>" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
										    <i class="fa fa-eye"></i>
										</a>
										<a href="<?php echo $flower_url; ?>" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
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
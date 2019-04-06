
<?php 
$reviews=$admin->loadreviews();
?>
<div class="row" style="margin-top: 1%;">
	<div class="col-lg-12">
		<div class="card m-b-30">
		    <div class="card-body">

		        <h4 class="mt-0 header-title">Available Reviews</h4>
		        <table class="table  table-striped table-responsive">
		            <thead>
		            <tr>
		                <th>#</th>
		                <th>Names</th>
		                <th>E-mail</th>
		                <th>Review</th>
		                <th>Status</th>
		                <th>Action</th>
		            </tr>
		            </thead>
		            <tbody>
		            	<?php 
		            	foreach ($reviews as $key => $review) {
		            		$more_images=$admin->load_images($review['id']);
		            		?>
				            <tr>
				                <th scope="row">
				                	<?php echo $review['id']; ?>
				                </th>
				                <td>
				                	<?php echo $review['names']; ?>
				                </td>
				                <td>
				                	<span class="badge badge-info">
				                		<?php echo $review['email']; ?>
				                	</span>
				                </td>
				                <td style="max-width: 85vh;">
				                	<blockquote>
				                		<?php echo $review['comment']; ?>
				                	</blockquote>
				                		
				                </td>
				                <td>
				                	<?php 
				                	if($review['status']=='ACTIVE'){
				                		?>
				                		<span class="badge badge-success">
				                			<?php echo $review['status']; ?>
				                		</span>
				                		<?php
				                	}elseif($review['status']=='PENDING'){
				                		?>
				                		<span class="badge badge-warning">
				                			<?php echo $review['status']; ?>
				                		</span>
				                		<?php
				                	}
				                	?>
				                </td>
				                <td>
				                	<div class="btn-group btn-group-toggle">
				                		<?php 
				                		if($review['status']=='PENDING'){
				                			?>
						                	<a name="<?php echo $review['name']; ?>" review="<?php echo $review['id']; ?>" class="btn btn-primary btn-sm activate_review" style="color: #fff;">
						                		<i class="fa fa-thumbs-o-up"></i>
						                	</a>
				                			<?php
				                		}elseif($review['status']=='ACTIVE'){
				                			?>
						                	<a name="<?php echo $review['name']; ?>" review="<?php echo $review['id']; ?>" class="btn btn-primary btn-sm desactivate_review" style="color: #fff;">
						                		<i class="fa fa-thumbs-down"></i>
						                	</a>
				                			<?php
				                		}
				                		?>
					                	<a review="<?php echo $review['id']; ?>" class="btn btn-danger btn-sm delete_review" style="color: #fff;">
					                		<i class="fa fa-trash"></i>
					                	</a>
				                	</div>
				                </td>
				            </tr>
		            		<?php
		            	}
		            	?>
		            </tbody>
		        </table>

		    </div>
		</div>
	</div>
</div>
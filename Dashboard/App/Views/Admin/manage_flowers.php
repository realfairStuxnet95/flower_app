
<?php 
$flowers=$admin->loadFlowers();
?>
<div class="row" style="margin-top: 1%;">
	<div class="col-lg-12">
		<div class="card m-b-30">
		    <div class="card-body">

		        <h4 class="mt-0 header-title">Basic example</h4>
		        <p class="text-muted m-b-30 font-14">
		        	<button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#myModal">ADD NEW FLOWER</button>
		        </p>

		        <table class="table">
		            <thead>
		            <tr>
		                <th>#</th>
		                <th>Poster</th>
		                <th>Flower</th>
		                <th>Images</th>
		                <th>Price</th>
		                <th>Items</th>
		                <th>Status</th>
		                <th>Action</th>
		            </tr>
		            </thead>
		            <tbody>
		            	<?php 
		            	foreach ($flowers as $key => $flower) {
		            		$more_images=$admin->load_images($flower['id']);
		            		?>
				            <tr>
				                <th scope="row">
				                	<?php echo $flower['id']; ?>
				                </th>
				                <td>
				                	<img src="upload/<?php echo $flower['poster']; ?>" style="width: 100px;height: auto;">
				                </td>
				                <td>
				                	<?php echo $flower['name']; ?>
				                </td>
				                <td>
				                	<?php 
				                	foreach ($more_images as $key => $value) {
				                		?>
				                		<img src="upload/<?php echo $value['image_path']; ?>" style="width: 100px;">
				                		<?php
				                	}
				                	?>
				                </td>
				                <td>
				                	<span class="badge badge-info">
				                		<?php echo $flower['price']; ?>
				                	</span>
				                </td>
				                <td>
				                	<strong>
				                		<?php echo $flower['items']; ?>
				                	</strong>
				                </td>
				                <td>
				                	<?php 
				                	if($flower['status']=='ACTIVE'){
				                		?>
				                		<span class="badge badge-success">
				                			<?php echo $flower['status']; ?>
				                		</span>
				                		<?php
				                	}
				                	?>
				                </td>
				                <td>
				                	<div class="btn-group btn-group-toggle">
					                	<a name="<?php echo $flower['name']; ?>" flower="<?php echo $flower['id']; ?>" class="btn btn-primary btn-sm add_photos" style="color: #fff;">
					                		<i class="fa fa-photo"></i>
					                	</a>
					                	<a flower="<?php echo $flower['id']; ?>" class="btn btn-danger btn-sm delete_flower" style="color: #fff;">
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
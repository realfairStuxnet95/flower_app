<?php 
$images=$admin->load_all_images();
?>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
<div class="container">
	<div class="row" style="padding: 0;margin: 0;">
     <?php 
     foreach ($images as $key => $image) {
     	?>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb" style="border: none;padding: 0;margin: 0;width: 380px;height: 300px;">
                <a style="border: none;" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="Dashboard/upload/<?php echo $image['image_path']; ?>"
                   data-target="#image-gallery">
                    <img class="img-responsive"
                         src="Dashboard/upload/<?php echo $image['image_path']; ?>"
                         alt="Arumus Flower Delivery"style="width: 380px;height: 300px;">
                </a>
            </div>
     	<?php
     }
     ?>
    </div>


        <div class="modal fade" id="image-gallery" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 0;">
            <div class="modal-dialog" style="background:#000;width: 50%;">
                <div class="modal-content">
                    <div class="modal-body" style="background:#000;border: none;">
                        <img id="image-gallery-image" class="img-responsive" src="" style="width: 100%;" >
                    </div>
                    <div class="modal-footer" style="background:#000;border-top: none;">
                        <button style="background: #333;" type="button" class="btn btn-secondary btn-sm float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button style="background: #333;" type="button" id="show-next-image" class="btn btn-secondary btn-sm float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
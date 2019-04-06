<form id="frm_add_review" class="form-product-review" method="post">
    <h5>ADD YOUR REVIEW</h5>
    <div class="form-group">
    	<label class="control-label">Your Rating</label>
        <p class="ratting-star">
    	 	<span class="fa fa-star" aria-hidden="true"></span>
            <span class="fa fa-star" aria-hidden="true"></span>
            <span class="fa fa-star" aria-hidden="true"></span>
            <span class="fa fa-star" aria-hidden="true"></span>
            <span class="fa fa-star" aria-hidden="true"></span>
    	</p>
    </div>
    <div class="form-group">
    	<label class="control-label" for="comment">Your Review</label>
    	<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" required></textarea>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
          	<label for="author" class="control-label">Name 
              	<span class="required">*</span>
             </label>
           <input id="author" class="form-control" name="author" type="text" value="" size="30" required>
        </div>
        <div class="form-group col-md-6">
          	<label for="email" class="control-label">Email (<em>We won't display it.</em>)
          		<span class="required">*</span>
          	</label>
          	<input id="email" class="form-control" name="email" type="text" value="" size="30" required>
        </div>
        <div class="form-submit col-md-12">
          <input type="hidden" name="flower" value="<?php echo $flower_id; ?>" id="flower"> 
        	<img id="preLoader" src="assets/images/glow.gif" style="width:100px;display: none;">
			<input name="submit" type="submit" id="submit" class="btn btn-primary" value="Send"> 
			<input type="hidden" name="comment_parent" id="comment_parent" value="">
		</div>
    </div>
 </form>
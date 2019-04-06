<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="upload_form" method="POST">
                  <div class="form-group">
                     <label for="email">Flower Poster</label>
                     <input type="file" name="image" id="image" multiple accept=".jpg, .png, .gif" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Flower name</label>
                    <input type="text" name="flower" class="form-control" id="flower">
                  </div>
                  <div class="form-group">
                    <label for="email">Flower Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                  </div>
                  <div class="form-group">
                    <label for="email">Flower Items Pieces</label>
                    <input type="number" name="items" class="form-control" id="items">
                  </div>
                <div class="form-group">
                  <label for="comment">Flower Description:</label>
                  <textarea name="comment" class="form-control" rows="5" id="comment" required></textarea>
                </div>
                  <button type="submit" class="btn btn-success waves-effect btn-lg">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
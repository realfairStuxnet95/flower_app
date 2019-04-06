<div id="photoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="flowLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="flowLabel">Modal Heading</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="frm_add_photos" method="POST">
                  <div class="form-group">
                     <label for="email">Flower Poster</label>
                     <input type="file" name="images[]" id="image" multiple accept=".jpg, .png, .gif" required>
                  </div>
                  <input id="flower_id" type="hidden" name="flower_id">
                  <button type="submit" class="btn btn-success waves-effect btn-lg">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
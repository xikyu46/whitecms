<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3 class="panel-title">Content Variable Editor for <?= $content->menu;?></h3>
</div>
      <div class="modal-body" style="margin:30px">
		<div class="row">
		<form role="form" method="post" id="formContentEdit" action="<?= current_url();?>">
							<div class="form-group">
								<label>Menu</label>
								<input type="text" name="menu"  required class="form-control" value="<?= $content->menu;?>">
							</div>
							<div class="form-group">
								<label>Background</label>
								<input type="text" name="background"  required class="form-control" value="<?= $content->background;?>">
							</div>
							<div class="form-group">
								<label>Content:</label>
								<textarea type="text" id="content" name="content"  value="" class="form-control"><?= $content->content;?></textarea>
							</div>
							<input type="hidden" name="mid" value="<?= $content->mid;?>">
							<input type="hidden" name="id" value="<?= $content->id;?>">
				<input type="submit" class="btn btn-success pull-right" value="Submit" role="button">
				<a class="btn btn-warning " onclick="$('#defaultModal').modal('hide');">Close</a>
		</form>
	</div>
	</div>
 <div class="modal-footer">
	
 </div>
 <script>
 CKEDITOR.replace( 'content' );
 formGeneral('#formContentEdit');
 </script>

<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3 class="panel-title">Content Variable Add</h3>
</div>
      <div class="modal-body" style="margin:30px">
		<div class="row">
		<form role="form" method="post" id="formContentAdd" action="<?= current_url();?>">
			
						
							<div class="form-group">
								<label>Background</label>
								<input type="text" name="background"  class="form-control">
							</div>
							<div class="form-group">
								<label>Menu</label>
								<input type="text" name="menu"  class="form-control">
							</div>
							<div class="form-group">
								<label>Content:</label>
								<textarea type="text" name="content"  class="form-control"></textarea>
							</div>
			<input type="hidden" name="mid" value="<?= $mid;?>">
			<input type="submit" class="btn btn-success pull-right" value="Submit" role="button">
			<a class="btn btn-warning " onclick="$('#defaultModal').modal('hide');">Close</a>
		</form>
	</div>
	</div>
 <div class="modal-footer">
	
 </div>
 <script>
 formGeneral('#formContentAdd');
 </script>

<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 sidebar">
			<?= $this->load->view(tpldir('admin/extension/sidebar_view'));?>
		</div>
		
			<div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Video</h4>
                            </div>
                        </div>
                        <div class="panel-body">
						<form class="form form-vertical" id="formCatAdd" method="post" action="<?= current_url();?>">
						<hr/>
							<div class="control-group">
								<label>Name</label>
								<div class="controls">
									<input type="text"  name="name" class="form-control" required placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>Description</label>
								<div class="controls">
									<textarea name="description"  required class="form-control"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label>Video Link</label>
								<div class="controls">
									<input type="text"  name="link" class="form-control" required placeholder="Video Link">
								</div>
							</div>
							<div class="control-group">
								<label></label>
								<div class="controls">
									<button type="submit" class="btn btn-primary">
									Submit
									</button>
								</div>
							</div>
                            </form>
                        </div>
                    </div>
		</div>
		
	</div>
</div>
<script>
formGeneral('#formCatAdd');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

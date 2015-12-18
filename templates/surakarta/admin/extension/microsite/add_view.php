<? $this->load->view(tpldir('admin/header_view'));?>
<link href="<?= tplurl('admin/includes/css/bootstrap-colorpicker.min.css');?>" rel="stylesheet">
<script src="<?= tplurl('admin/includes/js/bootstrap-colorpicker.min.js');?>"></script>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Microsite <small>Add</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-edit"></i> Microsite 
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
		<form role="form" method="post" id="formNwsEdit" action="<?= current_url();?>">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Template Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						
							<div class="form-group">
								<label>Title:</label>
								<input type="text" name="template_title" required class="form-control">
							</div>
							<div class="form-group">
								<label>Logo:</label>
								<input type="text" name="template_logo" required class="form-control">
							</div>
							<div class="form-group">
								<label>Judul Website :</label>
								<input type="text" name="template_judul" required class="form-control">
							</div>
							<div class="form-group">
								<label>Slogan:</label>
								<input type="text" name="template_slogan" required class="form-control">
							</div>
							<div class="form-group">
								<label>Url:</label>
								<input type="text" name="url" required class="form-control">
							</div>
							<div class="form-group">
								<label>Warna Navbar:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_navbar"  class="form-control"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Header:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_header"  class="form-control"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Header Border:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_header_border"  class="form-control" ><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Footer:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_footer"  class="form-control"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Status:</label>
								<label class="checkbox-inline">
									<input name="status" value="1" type="checkbox" > active
								</label>
							</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contact Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						
							<div class="form-group">
								<label>Facebook:</label>
								<input type="text" name="contact_facebook"  class="form-control">
							</div>
							<div class="form-group">
								<label>Twitter:</label>
								<input type="text" name="contact_twitter"  class="form-control">
							</div>
							<div class="form-group">
								<label>Instagram :</label>
								<input type="text" name="contact_instagram"  class="form-control">
							</div>
							<div class="form-group">
								<label>Google Plus:</label>
								<input type="text" name="contact_googleplus"  class="form-control">
							</div>
							
							<div class="form-group">
								<label>Contact Image:</label>
								<input type="text" name="contact_image"  class="form-control">
							</div>
							<div class="form-group">
								<label>Phone:</label>
								<input type="text" name="contact_phone"  class="form-control">
							</div>
							
							<div class="form-group">
								<label>Email:</label>
								<input type="text" name="contact_email"  class="form-control">
							</div>
							<div class="form-group">
								<label>Address:</label>
								<textarea type="text" name="contact_address"  class="form-control"></textarea>
							</div>
						
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Content Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Menu</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			<input type="submit" class="btn btn-success pull-right" value="Submit" role="button">
		</form>
		</div>
	</div> <!-- end: page content container --> 
<script>
formGeneral('#formNwsEdit');
$(function(){
	$('.colorpicker').colorpicker();
});
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
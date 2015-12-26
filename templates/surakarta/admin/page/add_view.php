<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Page <small>Add</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-list"></i> Pages
					</li>
					<li class="active">
						<i class="fa fa-edit"></i> Page Add 
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Content Editor</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<form id="formPageEdit" role="form" ckeditor="true" method="post" action="<?= current_url();?>">
						<input type="submit" style="display:none">
							<h4>Bahasa:</h4>
							<hr />
							<div class="form-group">
								<label>Judul:</label>
								<input id="title" class="form-control" name="title" required  />
							</div>
							<div class="form-group">
								<label>Url:</label>
								<div class="input-group">
									<div class="input-group-addon"><?= base_url();?></div><input id="url" class="form-control" name="url"  />
								</div>
							</div>
							<div class="form-group">
								<label>Status:</label>
									<input name="status" type="checkbox" value="1" checked />
							</div>
							<div class="form-group">
								<label>Template:</label>
								<label class="select-inline">
									<? if($templates){?>
									<select class="form-control" name="template">
										<? foreach($templates as $templateRow){?>
											<option value="<?= $templateRow;?>" ><?= $templateRow;?></option>
										<? }?>
									</select>
									<? }?>
								</label>
							</div>
							<div class="form-group">
								<label>Isi:</label>
								<textarea id="content" name="content" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Meta Key:</label>
								<textarea name="meta_key" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Meta Description:</label>
								<textarea name="meta_desc" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-success" type="submit" value="Save" />
							</div>
							<h4>English:</h4>
							<hr />
							<div class="form-group">
								<label>Judul:</label>
								<input class="form-control" name="title_en" required  />
							</div>
							<div class="form-group">
								<label>Isi:</label>
								<textarea id="content-en" name="content_en" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Meta Key:</label>
								<textarea name="meta_key_en" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label>Meta Description:</label>
								<textarea name="meta_desc_en" class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-success" type="submit" value="Save" />
							</div>
						</form>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container --> 
	
<script>
$("#title").keyup(function() {
	var newValue = this.value.toLowerCase();
	var newValueReplace = newValue.replace(/[^a-z0-9\ ]/g,"");
	var newValueReplace2 = newValue.replace(/[\ ]/g,"-");
    $('#url').val(newValueReplace2);
});
CKEDITOR.replace( 'content' );
CKEDITOR.replace( 'content-en' );
formGeneral('#formPageEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
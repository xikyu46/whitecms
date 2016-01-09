<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					News <small>Add</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-list"></i> News
					</li>
					<li class="active">
						<i class="fa fa-edit"></i> News Add 
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
								<input class="form-control" id="title" name="title" required  />
							</div>
							<div class="form-group">
								<label>Url:</label>
								<div class="input-group">
									<div class="input-group-addon"><?= base_url('news');?>/</div><input id="url" class="form-control" name="url"  />
								</div>
							</div>
							<div class="form-group">
								<label>Status:</label>
									<input name="status" type="checkbox" value="1" checked />
							</div>
							<div class="form-group">
								<label>Image:</label>
								<div class="input-group">
									<input class="form-control" name="image" id="image"/>
									<a class="input-group-addon" href="#" onclick="showModal('<?= base_url('admin/asset/modal/image');?>');">
									<i class="fa fa-picture-o"></i>
									</a>
								</div>
							</div>
							<!--<div class="form-group">
								<label>Image 2:</label>
								<input class="form-control" name="image2" />
							</div>-->
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
								<label>Kategori:</label>
								<input class="form-control" name="tag" />
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
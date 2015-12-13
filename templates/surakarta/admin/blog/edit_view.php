<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Page <small>Edit</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-list"></i> Pages
					</li>
					<li class="active">
						<i class="fa fa-edit"></i> Page Edit 
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
								<input class="form-control" name="title" required value="<?= $blog->title;?>" />
							</div>
							<div class="form-group">
								<label>Url:</label>
								<div class="input-group">
									<div class="input-group-addon"><?= base_url();?></div><input class="form-control" name="url" value="<?= $blog->url;?>" />
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal:</label>
								<label><?= date('d/m/Y H:i:s',$blog->update);?></label>
<!-- 								<input class="form-control" name="date" value="<?= date('d/m/Y',$blog->date);?>" /> -->
							</div>
							<div class="form-group">
								<label>Status:</label>
									<input name="status" type="checkbox" value="1" <? if($blog->status){echo "checked";}?> />
							</div>
							<div class="form-group">
								<label>Template:</label>
								<label class="select-inline">
									<? if($templates){?>
									<select class="form-control" name="template">
										<? foreach($templates as $templateRow){?>
											<option value="<?= $templateRow;?>" <? if($blog->template == $templateRow){echo "selected";}?> ><?= $templateRow;?></option>
										<? }?>
									</select>
									<? }?>
								</label>
							</div>
							<div class="form-group">
								<label>Isi:</label>
								<textarea id="content" name="content" class="form-control" rows="4"><?= $blog->content;?></textarea>
							</div>
							<div class="form-group">
								<label>Meta Key:</label>
								<textarea name="meta_key" class="form-control" rows="4"><?= $blog->meta_key;?></textarea>
							</div>
							<div class="form-group">
								<label>Meta Description:</label>
								<textarea name="meta_desc" class="form-control" rows="4"><?= $blog->meta_desc;?></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-success" type="submit" value="Save" />
							</div>
							<h4>English:</h4>
							<hr />
							<div class="form-group">
								<label>Judul:</label>
								<input class="form-control" name="title_en" required value="<?= $blog->title_en;?>" />
							</div>
							<div class="form-group">
								<label>Isi:</label>
								<textarea id="content-en" name="content_en" class="form-control" rows="4"><?= $blog->content_en;?></textarea>
							</div>
							<div class="form-group">
								<label>Meta Key:</label>
								<textarea name="meta_key_en" class="form-control" rows="4"><?= $blog->meta_key_en;?></textarea>
							</div>
							<div class="form-group">
								<label>Meta Description:</label>
								<textarea name="meta_desc_en" class="form-control" rows="4"><?= $blog->meta_desc_en;?></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-success" type="submit" value="Save" />
							</div>
							<input type="hidden" name="id" value="<?= $blog->id;?>">
						</form>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container --> 
	
<script>
CKEDITOR.replace( 'content' );
CKEDITOR.replace( 'content-en' );
formGeneral('#formPageEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
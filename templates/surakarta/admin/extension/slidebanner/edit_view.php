<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Banner <small>Edit</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-edit"></i> Banner 
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Banner #<?= $slidebanner->id;?></h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<form role="form" method="post" id="formNwsEdit" action="<?= current_url();?>">
							<div class="form-group">
								<label>URL:</label>
								<input name="url" class="form-control" required value="<?= $slidebanner->url;?>">
							</div>
							<div class="form-group">
								<label>Text:</label>
								<textarea name="text" class="form-control"><?= $slidebanner->text;?></textarea>
							</div>
							<div class="form-group">
								<label>Status:</label>
								<label class="checkbox-inline">
									<input name="status" value="1" type="checkbox" <? if($slidebanner->status){echo "checked";}?>> active
								</label>
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="<?= $slidebanner->id;?>">
								<input class="btn btn-success" type="submit" value="Submit">
							</div>								
						</form>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container --> 
<script>
formGeneral('#formNwsEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
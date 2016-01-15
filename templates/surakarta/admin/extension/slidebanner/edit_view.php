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
								<input name="url" id="url" class="form-control" required value="<?= $slidebanner->url;?>">
							</div>
							<div class="form-group">
								<label>Image:</label>
								<div class="input-group">
									<input name="imgurl" id="imgurl" class="form-control" required value="<?= $slidebanner->imgurl;?>">
									<a class="input-group-addon" href="#" onclick="showModal('<?= base_url('admin/asset/modal/imgurl');?>');">
									<i class="fa fa-picture-o"></i>
									</a>
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal:</label>
								<input class="form-control datepicker" name="date" required  value="<?= date('d-m-Y',$slidebanner->date);?>"/>
							</div>
							<div class="form-group">
								<label>Title:</label>
								<input name="title"  class="form-control" required value="<?= $slidebanner->title;?>">
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
							<hr>
							<label>English</label>
							<div class="form-group">
								<label>Title:</label>
								<input name="title_en"  class="form-control" required value="<?= $slidebanner->title_en;?>">
							</div>
							
							<div class="form-group">
								<label>Text:</label>
								<textarea name="text_en" class="form-control"><?= $slidebanner->text_en;?></textarea>
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
$(document).ready(function() {
    $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
        });
});
formGeneral('#formNwsEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>

<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Dashboard <small>Front Page Controller</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-5"> <!-- start: panel tree -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Menu Tree
							<a class="pull-right" href="<?= base_url('admin/menu/add');?>"><i class="fa fa-plus"></i> New Menu</a>
						</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<?= view_mod('menu','outadmin');?>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div> <!-- end: panel tree -->
			<div class="col-lg-7"> <!-- start: panel form -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Add New Menu</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<form role="form" id="formMenuEdit" action="<?= current_url();?>" method="post">
							<div class="form-group">
								<label>Title:</label>
								<input class="form-control" placeholder="Title" name="title" />
							</div>
							<div class="form-group">
								<label>Title(en)</label>
								<input class="form-control" placeholder="Title" name="title_en" />
							</div>
							<div class="form-group">
								<label>Parent</label>
								<input class="form-control" name="parent_id" />
							</div>
							<div class="form-group">
								<label>Relation</label>
								<? if($page){?>
									<select name="post_id" id="menurelation" class="form-control">
										<option value="">-- External Url--</option>
										<? foreach($page as $pageRow){?>
											
											<option value="<?= $pageRow->id;?>"><?= $pageRow->title;?></option>
										<? }?>
									</select>
								<? }?>
							</div>
							<div id="exturl" class="form-group">
								<label>Ext Url</label>
								<input class="form-control" name="link" />
							</div>
							<div class="form-group">
								<label>Hide</label>
								<div class="form-control">
									<input type="checkbox" name="hide" value="1">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success pull-right">Add</button>
							</div>
						</form>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div> <!-- end: panel form -->
		</div>
	</div> <!-- end: page content container -->

<script>
$(document).ready(function(){
	$('#menurelation').change(function(){
		var menuval = $(this).val();
		if(!menuval){
			$('#exturl').show();
		}else{
			$('#exturl').val('');
			$('#exturl').hide();
		}
	})
});
formGeneral('#formMenuEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>

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
			</div> <!-- end: panel form -->
		</div>
	</div> <!-- end: page content container -->

<? $this->load->view(tpldir('admin/footer_view'));?>

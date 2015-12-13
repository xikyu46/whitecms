<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Asset Management
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Parent Dir</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table  table-hover ">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
									</tr>
								</thead>
								<tbody>
									<? $index=1;?>
									<? foreach($asset as $assetRow){?>
									<tr>
										<td><?= $index;?></td>
										<td><a href="<?= base_url('admin/asset/detail/'.$assetRow->id);?>"><i class="fa fa-folder"></i>&nbsp;&nbsp;<?= $assetRow->name;?></a></td>
									</tr>
									<? $index++;?>
									<? }?>
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<p><!-- end: page content --></p>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Microsite <small>Content Management</small>
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Microsite</h3>
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
									<? if($microsite){?>
									<? foreach($microsite as $micrositeRow){?>
										<tr>
											<td><?= $micrositeRow->id;?></td>
											<td><?= $micrositeRow->menu;?></td>
											<td><? if($micrositeRow->status){echo "Active";}else{echo "Inactive";};?></td>
											<td>
												<a href="<?= base_url('admin/microsite/edit/'.$micrositeRow->id);?>">Edit</a> |
												<a href="<?= base_url('admin/microsite/delete/'.$micrositeRow->id);?>">Delete</a>
											</td>
										</tr>	
									<? }?>
									<? }?>
								</tbody>
							</table>
						</div>
							<a class="btn btn-success pull-right" href="<?= base_url('admin/microsite/add');?>" role="button"><i class="fa fa-plus"></i> New Section</a>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

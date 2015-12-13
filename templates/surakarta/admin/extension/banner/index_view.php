<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Banner <small>Management</small>
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Front Banner</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>IMG Url</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? foreach($banner as $bannerRow){?>
										<tr>
											<td><?= $bannerRow->id;?></td>
											<td><?= $bannerRow->url;?></td>
											<td><? if($bannerRow->status){echo "Active";}else{echo "Inactive";};?></td>
											<td>
											<a href="<?= base_url('admin/banner/edit/'.$bannerRow->id);?>">Edit</a>
											</td>
										</tr>	
									<? }?>
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Side Banner</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>IMG Url</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? foreach($side as $bannerRow){?>
										<tr>
											<td><?= $bannerRow->id;?></td>
											<td><?= $bannerRow->url;?></td>
											<td><? if($bannerRow->status){echo "Active";}else{echo "Inactive";};?></td>
											<td>
											<a href="<?= base_url('admin/banner/edit/'.$bannerRow->id);?>">Edit</a>
											</td>
										</tr>	
									<? }?>
									
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div>
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<p><!-- end: page content --></p>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

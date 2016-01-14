<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					SlideBanner <small>Management</small>
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Slide Banner</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Url</th>
										<th>Title</th>
										<th>Text</th>
										<th>IMG</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? foreach($slidebanner as $bannerRow){?>
										<tr>
											<td><?= $bannerRow->id;?></td>
											<td><?= $bannerRow->url;?></td>
											<td><?= $bannerRow->title;?></td>
											<td><?= $bannerRow->text;?></td>
											<td><img src="<?= $bannerRow->imgurl;?>" style="height:50px"/></td>
											<td><? if($bannerRow->status){echo "Active";}else{echo "Inactive";};?></td>
											<td>
											<a href="<?= base_url('admin/slidebanner/edit/'.$bannerRow->id);?>">Edit</a>
											</td>
										</tr>	
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
 

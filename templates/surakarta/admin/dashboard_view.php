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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Newsticker Panel</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<? if($newsticker){?>
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Text</th>
										<th>URL</th>
										<th>Status</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<? foreach($newsticker as $newstickerRow){?>
									<tr>
										<td><?= $newstickerRow->id;?></td>
										<td><?= $newstickerRow->text;?></td>
										<td><?= $newstickerRow->url;?></td>
										<td><? if($newstickerRow->status){ echo "Active";}else{echo "Inactive";}?></td>
										<td><a href="<?= base_url('admin/newsticker/edit/'.$newstickerRow->id);?>">Edit</a></td>
									</tr>
									<? }?>
									
								</tbody>
							</table>
							<? }?>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<p><!-- end: page content --></p>
<? $this->load->view(tpldir('admin/footer_view'));?>

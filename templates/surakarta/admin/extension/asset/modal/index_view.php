<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3 class="panel-title">Asset Management</h3>
</div>
<div class="modal-body" style="margin:30px">
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
										<td><a href="#" onclick="showModal('<?= base_url('admin/asset/modaldetail/'.$assetRow->id.'/'.$inputid);?>');"><i class="fa fa-folder"></i>&nbsp;&nbsp;<?= $assetRow->name;?></a></td>
									</tr>
									<? $index++;?>
									<? }?>
								</tbody>
							</table>
							<nav> <!-- start: pagination -->
								<ul class="pagination">
									<?= showpage(current_url(),$count_asset);?>
								</ul>
							</nav><!-- end: pagination -->
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
</div>
<div class="modal-footer">
	
</div>


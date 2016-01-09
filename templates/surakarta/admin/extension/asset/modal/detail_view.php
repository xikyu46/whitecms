<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h3 class="panel-title">Asset Management</h3>
</div>
<div class="modal-body" style="margin:30px">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Directory <?= $asset_dir->name;?></h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table  table-hover ">
								<thead>
									<tr>
										<th class="text-right">#</th>
										<th class="col-sm-8 text-left">Name</th>
										<th class="col-sm-2 text-left">URL</th>
										<th class="col-sm-3 text-left">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-right"><a href="<?= base_url('admin/asset');?>"><i class="fa fa-level-up"></a></td>
										<td class="col-sm-8 text-left"><a href="#" onclick="showModal('<?= base_url('admin/asset/modal');?>');"><strong>..</strong></a></td>
										<td class="col-sm-2 text-left"></td>
										<td class="col-sm-2 text-left"></td>
									</tr>
									<? if($asset){?>
										<? $index=1 + $this->input->get('offset');?>
										<? foreach($asset as $assetRow){?>
										<tr>
											<td class="text-right"><?= $index;?></td>
											<td class="col-sm-8 text-left"><i class="fa fa-file-image-o"></i>&nbsp;&nbsp;<?= $assetRow->file;?></td>
											<td class="col-sm-4 text-left"><?= base_url('assets/'.$assetRow->file);?></td>
											<td class="col-sm-2 text-left"><a href="#" onclick="insertPage('<?= base_url('assets/'.$assetRow->file);?>','<?= $inputid;?>')"><i class="fa fa-check"></i></a></td>
										</tr>
										<? $index++;?>
										<? }?>
									<? }?>
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
</div>
<div class="modal-footer">
</div>
<script>
	function insertPage(url,inputid){
		$('#'+inputid).val(url);
		bootbox.alert('File has been added');
	}
</script>
 

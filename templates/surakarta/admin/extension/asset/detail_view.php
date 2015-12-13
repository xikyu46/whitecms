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
										<td class="col-sm-8 text-left"><a href="<?= base_url('admin/asset');?>"><strong>..</strong></a></td>
										<td class="col-sm-2 text-left"></td>
										<td class="col-sm-2 text-left"></td>
									</tr>
									<? if($asset){?>
										<? $index=1;?>
										<? foreach($asset as $assetRow){?>
										<tr>
											<td class="text-right"><?= $index;?></td>
											<td class="col-sm-8 text-left"><i class="fa fa-file-image-o"></i>&nbsp;&nbsp;<?= $assetRow->file;?></td>
											<td class="col-sm-4 text-left"><?= base_url('assets/'.$assetRow->file);?></td>
											<td class="col-sm-2 text-left"><a href="#" onclick="deletePage('<?= $assetRow->id;?>')"><i class="fa fa-trash"></i></a></td>
										</tr>
										<? $index++;?>
										<? }?>
									<? }?>
								</tbody>
							</table>
							<hr/>
								<div class="form-group">
							<form id="formUploadFile" method="post" enctype="multipart/form-data" action="<?= base_url('admin/asset/add');?>">
									<label>Upload File</label>
									<input type="file"  name="assetfile" id="exampleInputFile">
								</div>
								<div class="form-group">
									<input type="hidden" name="dirid" value="<?= $asset_dir->id;?>">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</form>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<p><!-- end: page content --></p>
<script>
formGeneral('#formUploadFile');
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus file ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/asset/delete/'+id,function(data){
					if(data.resultCode == 1000){
						bootbox.alert(data.resultMsg,function(){
							if(data.resultData.openUrl){
								window.location.href=data.resultData.openUrl;
							}
						});
					}else{
						bootbox.alert(data.resultMsg);
					}
				},'json');
			}
		}
	});
}
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

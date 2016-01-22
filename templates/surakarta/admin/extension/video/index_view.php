<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Video <small>Management</small>
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Video</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
					<div class="row"><!-- start: sort, search and new -->
						<div class="col-md-12">
							<a class="btn btn-success pull-right" href="<?= base_url('admin/video/add');?>" role="button"><i class="fa fa-plus"></i> New Video</a>
						</div>
					</div>
					<hr />
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>IMG Url</th>
										<th>Text</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? if($video){?>
										<? foreach($video as $videoRow){?>
											<tr>
												<td><?= $videoRow->id;?></td>
												<td><?= $videoRow->url;?></td>
												<td><?= $videoRow->text;?></td>
												<td><? if($videoRow->status){echo "Active";}else{echo "Inactive";};?></td>
												<td>
												<a href="<?= base_url('admin/video/edit/'.$videoRow->id);?>">Edit</a> | 
												<a href="#" onclick="deletePage('<?= $videoRow->id;?>');">Delete</a>
												</td>
											</tr>	
										<? }?>
									<? }?>
								</tbody>
							</table>
							<nav> <!-- start: pagination -->
								<ul class="pagination">
									<?= showpage(current_url(),$count_video);?>
								</ul>
							</nav>
							
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<p><!-- end: page content --></p>
<script>
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus Video ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/video/delete/'+id,function(data){
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
 

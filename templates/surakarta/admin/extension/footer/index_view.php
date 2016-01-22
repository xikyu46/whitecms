<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Footer <small>Management</small>
				</h1>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Middle</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="row"><!-- start: sort, search and new -->
							<div class="col-md-12">
								<a class="btn btn-success pull-right" href="<?= base_url('admin/footer/add/middle');?>" role="button"><i class="fa fa-plus"></i> New Middle Footer</a>
							</div>
						</div>
						<hr />
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Url</th>
										<th>Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? if($middle){?>
										<? foreach($middle as $footerRow){?>
											<tr>
												<td><?= $footerRow->id;?></td>
												<td><?= $footerRow->url;?></td>
												<td><?= $footerRow->name;?></td>
												<td>
													<a href="<?= base_url('admin/footer/edit/'.$footerRow->id);?>">Edit</a>
													<a href="#" onclick="deletePage('<?= $footerRow->id;?>');">Delete</a>
												</td>
											</tr>	
										<? }?>
									<? }?>
								</tbody>
							</table>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Right</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="row"><!-- start: sort, search and new -->
							<div class="col-md-12">
								<a class="btn btn-success pull-right" href="<?= base_url('admin/footer/add/right');?>" role="button"><i class="fa fa-plus"></i> New Right Footer</a>
							</div>
						</div>
						<hr />
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Url</th>
										<th>Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? if($right){?>
										<? foreach($right as $footerRow){?>
											<tr>
												<td><?= $footerRow->id;?></td>
												<td><?= $footerRow->url;?></td>
												<td><?= $footerRow->name;?></td>
												<td>
												<a href="<?= base_url('admin/footer/edit/'.$footerRow->id);?>">Edit</a>
												<a href="#" onclick="deletePage('<?= $footerRow->id;?>');">Delete</a>
												</td>
											</tr>	
										<? }?>
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
<script>
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus Footer ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/footer/delete/'+id,function(data){
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
 

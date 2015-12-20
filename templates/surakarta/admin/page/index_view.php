<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>

<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Pages <small>List</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i> Dashboard
					</li>
					<li class="active">
						<i class="fa fa-list"></i> Pages
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Pages Panel</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="row"><!-- start: sort, search and new -->
							<div class="col-md-4">
								<div class="input-group">
									<select class="form-control">
										<option>Terbaru</option>
										<option>Terlama</option>
									</select>
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for..." />
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Cari</button>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<a class="btn btn-success pull-right" href="<?= base_url('admin/page/add');?>" role="button"><i class="fa fa-plus"></i> New Page</a>
							</div>
						</div><!-- end: sort, search and new -->
						<hr />
						<div class="table-responsive">
							<? if(!$pages){?>
								<p class="alert alert-warning">No page available</p> 
							<? }else{?>
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Judul</th>
										<th>Tanggal</th>
										<th>Author</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? foreach($pages as $pageRow){?>
									<tr>
										<td><?= $pageRow->id;?></td>
										<td><?= $pageRow->title;?></td>
										<td><?= date('d/m/Y',$pageRow->update);?></td>
										<td><?= $pageRow->author;?></td>
										<td><? if($pageRow->status){echo "Active";}else{echo "Inactive";};?></td>
										<td>
										<a href="<?= base_url('admin/page/edit/'.$pageRow->id);?>">Edit</a> | 
										<a href="#delete"  onclick="deletePage('<?= $pageRow->id;?>');">Delete</a>
										</td>
									</tr>
									<? }?>
								</tbody>
							</table>
							<? }?>
							<nav> <!-- start: pagination -->
								<ul class="pagination">
									<?= showpage(current_url(),20);?>
								</ul>
							</nav><!-- end: pagination -->
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->
</div>
<script>
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus halaman ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/page/delete/'+id,function(data){
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

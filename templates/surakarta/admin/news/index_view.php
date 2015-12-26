<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>

<!-- start: page content -->
<div id="page-wrapper"> 
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					News <small>List</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i> Dashboard
					</li>
					<li class="active">
						<i class="fa fa-list"></i> News
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">News Panel</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="row"> <!-- start: sort, search and new -->
							<div class="col-md-4">
								<form action="<?= current_url();?>">
									<div class="input-group">
										<select name="filter" class="form-control">
											<option value="latest" <? if($this->input->get('filter') == 'latest'){echo "selected";}?>>Terbaru</option>
											<option value="oldest" <? if($this->input->get('filter') == 'oldest'){echo "selected";}?>>Terlama</option>
										</select>
										<span class="input-group-btn">
											<input type="submit" class="btn btn-default" value="Go!">
										</span>
									</div>
								</form>
							</div> <!-- end: sort, search and new -->
							<div class="col-md-4">
								<form action="<?= current_url();?>">
									<div class="input-group">
										<input type="text" name="title" class="form-control" value="<?= $this->input->get('title');?>" placeholder="Search for..." />
										<span class="input-group-btn">
											<input type="submit" class="btn btn-default" value="Cari">
										</span>
									</div>
								</form>
							</div>
							<div class="col-md-4">
								<a class="btn btn-success pull-right" href="<?= base_url('admin/news/add');?>" role="button"><i class="fa fa-plus"></i> Add News</a>
							</div>
						</div>
						<hr />
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Judul</th>
										<th>Tanggal</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? if($news){?>
									<? foreach($news as $blogRow){?>
									<tr>
										<td><?= $blogRow->id;?></td>
										<td><?= $blogRow->title;?></td>
										<td><?= date('d/m/Y H:i:s',$blogRow->update);?></td>
										<td><? if($blogRow->status){echo "Active";}else{echo "Inactive";}?></td>
										<td>
										<a href="<?= base_url('admin/news/edit/'.$blogRow->id);?>">Edit</a> | 
										<a href="#delete"  onclick="deletePage('<?= $blogRow->id;?>');">Delete</a>
										</td>
									</tr>
									<? }?>
									<? }?>
								</tbody>
							</table>
							<nav> <!-- start: pagination -->
								<ul class="pagination">
									<?= showpage(current_url(),$count_news);?>
								</ul>
							</nav><!-- end: pagination -->
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
		</div>
	</div> <!-- end: page content container -->

<script>
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus halaman ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/news/delete/'+id,function(data){
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

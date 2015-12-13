<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 sidebar">
			<?= $this->load->view(tpldir('admin/extension/sidebar_view'));?>
		</div>
		
			<div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>List Video</h4>
                            </div>
						<? if(!$video){?>
							<p class="alert alert-warning">There is no video yet</p>
						<? }else{?>
						<table class="table table-hover">
						<thead>
							<tr>
							<th>Date</th>
							<th>Name</th>
							<th>Title</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<? foreach($video as $videoRow){?>
								<tr>
									<td><?= date('Y-m-d H:i:s',$videoRow->date);?></td>
									<td><?= $videoRow->name;?></td>
									<td>
										<a href="<?= base_url('admin/video/edit/'.$videoRow->id);?>" class="btn btn-success">Edit</a>
									</td>
								</tr>
							<? }?>
						</tbody>
						</table>
						<? }?>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add New Video</h4>
                            </div>
                        </div>
                        <div class="panel-body">
						<form class="form form-vertical" id="formVideoAdd" method="post" action="<?= base_url('admin/video/add');?>">
						<hr/>
							<div class="control-group">
								<label>Name</label>
								<div class="controls">
									<input type="text"  name="name" class="form-control" required placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>Description</label>
								<div class="controls">
									<textarea name="description"  required class="form-control"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label>Video Link</label>
								<div class="controls">
									<input type="text"  name="link" class="form-control" required placeholder="Video Link">
								</div>
							</div>
							<div class="control-group">
								<label></label>
								<div class="controls">
									<button type="submit" class="btn btn-primary">
									Submit
									</button>
								</div>
							</div>
                            </form>
                        </div>
                    </div>
		
		</div>
		
	</div>
</div>
<script>
formGeneral('#formVideoAdd');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>
 

<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 sidebar">
			<? if($categories){?>
			<ul class="nav nav-sidebar">
				<? foreach($categories as $categoryRow){?>
					<li><a href="<?= base_url('admin/category/edit/'.$categoryRow->id);?>"><?= $categoryRow->name;?></a></li>
				<? }?>
			</ul>
			<? }?>
			<a href="<?= base_url('admin/category/add');?>" class="btn btn-primary">Add Category</a>
		</div>
		
			<div class="col-sm-9">
		
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>Edit Category <?= $category->id;?></h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formCatAdd" method="post" action="<?= current_url();?>">
							<div class="control-group">
								<label>Name</label>
								<div class="controls">
									<input type="text"  name="name" class="form-control" required value="<?= $category->name;?>">
								</div>
							</div>
							<div class="control-group">
								<label></label>
								<div class="controls">
									<input type="hidden" name="id" value="<?= $category->id;?>">
									<button type="submit" class="btn btn-primary">
									Submit
									</button>
								</div>
							</div>
						</form>
						<hr/>
						<h4>Post for Category <?= $category->name;?></h4>
						<? if(!$blogs){?>
							<p class="alert alert-warning">There is no post yet</p>
						<? }else{?>
						<table class="table table-hover">
						<thead>
							<tr>
							<th>ID</th>
							<th>Date</th>
							<th>Title</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<? foreach($blogs as $blogRow){?>
								<tr>
									<td><?= $blogRow->id;?></td>
									<td><?= date('Y-m-d H:i:s',$blogRow->update);?></td>
									<td><?= $blogRow->title;?></td>
									<td>
										<a href="<?= base_url('admin/blog/edit/'.$blogRow->id);?>" class="btn btn-success">Edit</a>
										<a href="#" onclick="delete" class="btn btn-danger">Delete</a>
									</td>
								</tr>	
							<? }?>
						</tbody>
						</table>
						<? }?>
						<a href="<?= base_url('admin/blog/add/'.$category->id);?>" class="btn btn-primary">Add Post</a>
                        </div>
                        <!--/panel content-->
                    </div>
                  
		</div>
		
	</div>
</div>
<script>
formGeneral('#formCatAdd');
</script>

<? $this->load->view(tpldir('admin/footer_view'));?>

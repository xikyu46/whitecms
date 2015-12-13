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
                                <h4>New Category</h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formCatAdd" method="post" action="<?= current_url();?>">
						<hr/>
							<div class="control-group">
								<label>Name</label>
								<div class="controls">
									<input type="text"  name="name" class="form-control" required placeholder="Title">
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
                        <!--/panel content-->
                    </div>
                  
		</div>
		
	</div>
</div>
<script>
formGeneral('#formCatAdd');
</script>

<? $this->load->view(tpldir('admin/footer_view'));?>

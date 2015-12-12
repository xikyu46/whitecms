<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<div id="jstree-proton-1" style="margin-top:20px;" class="proton-demo">
				<? if($pages){?>
					<ul>
						<? foreach($pages as $pageRow){?>
							<li><a href="<?= base_url('admin/page/edit/'.$pageRow->id);?>"><?= $pageRow->title;?></a></li>
						<? }?>
					</ul>
				<? }?>
			</div>	
		</div>
		
			<div class="col-sm-9">
		
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>New Page</h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formPageAdd" method="post" action="<?= current_url();?>">
						<hr/>
							<h4>Indonesia</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Template</label>
								<div class="controls">
									<? if($templates){?>
									<select name="template">
										<? foreach($templates as $templateRow){?>
											<option value="<?= $templateRow;?>" ><?= $templateRow;?></option>
										<? }?>
									</select>
									<? }?>
								</div>
							</div>
                                <hr/>
                                <h4>English</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title_en" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt_en" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content_en" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key_en" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc_en" class="form-control"></textarea>	
								</div>
							</div>
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
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
formGeneral('#formPageAdd');
</script>

<? $this->load->view(tpldir('admin/footer_view'));?>

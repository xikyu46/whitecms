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
                                <h4>New Post for Category <?= $category->name;?></h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formPageAdd" method="post" ckeditor="true" action="<?= current_url();?>">
						<hr/>
							<h4>Indonesia</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title" value="" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>Url</label>
								<div class="controls">
									<input type="text"  name="url" value="" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt"  id="excerpt" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content"  id="editor" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key"  class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc"  class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Template</label>
								<div class="controls">
									<? if($templates){?>
									<select class="form-control" name="template">
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
									<input type="text"  name="title_en" value="" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt_en"  id="excerpt-en" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content_en"  id="editor-en" class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key_en"  class="form-control"></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc_en"  class="form-control"></textarea>	
								</div>
							</div>
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
								<input type="hidden" name="catid" value="<?= $category->id;?>">
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
CKEDITOR.replace( 'excerpt' );
CKEDITOR.replace( 'excerpt-en' );
CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'editor-en' );
formGeneral('#formPageAdd');
</script>

<? $this->load->view(tpldir('admin/footer_view'));?>

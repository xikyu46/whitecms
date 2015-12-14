<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<div id="jstree-proton-1" style="margin-top:20px;" class="proton-demo">
				<? if($categories){?>
					<ul class="nav nav-sidebar">
						<? foreach($categories as $categoryRow){?>
							<li><a href="<?= base_url('admin/category/edit/'.$categoryRow->id);?>"><?= $categoryRow->name;?></a></li>
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
                                <h4>Edit Page <?= $blog->id;?></h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formPageAdd" method="post" ckeditor="1" action="<?= current_url();?>">
						<hr/>
							<h4>Indonesia</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title" value="<?= $blog->title;?>" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>Url</label>
								<div class="controls">
									<input type="text"  name="url" value="<?= $blog->url;?>" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content"  id="editor" class="form-control"><?= $blog->content;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key"  class="form-control"><?= $blog->meta_key;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc"  class="form-control"><?= $blog->meta_desc;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Template</label>
								<div class="controls">
									<? if($templates){?>
									<select class="form-control" name="template">
										<? foreach($templates as $templateRow){?>
											<option value="<?= $templateRow;?>" <? if($blog->template == $templateRow){echo "selected";}?> ><?= $templateRow;?></option>
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
									<input type="text"  name="title_en" value="<?= $blog->title_en;?>" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content_en"  id="editor-en" class="form-control"><?= $blog->content_en;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key_en"  class="form-control"><?= $blog->meta_key_en;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc_en"  class="form-control"><?= $blog->meta_desc_en;?></textarea>	
								</div>
							</div>
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
								<input type="hidden" name="id" value="<?= $blog->id;?>">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                        <a href="#" class="btn btn-danger" onclick="deletePage('<?= $blog->id;?>')">Delete</a>
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
CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'editor-en' );
formGeneral('#formPageAdd');
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus halaman ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/blog/delete/'+id,function(data){
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

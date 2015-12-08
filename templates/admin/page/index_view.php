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
                                <h4>Edit Page <?= $page->id;?></h4>
                            </div>
                        </div>
					<div class="panel-body">
						<form class="form form-vertical" id="formPageAdd" method="post" action="<?= current_url();?>">
						<hr/>
							<h4>Indonesia</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title" value="<?= $page->title;?>" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt"  class="form-control"><?= $page->excerpt;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content"  class="form-control"><?= $page->content;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key"  class="form-control"><?= $page->meta_key;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc"  class="form-control"><?= $page->meta_desc;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Template</label>
								<div class="controls">
									<input type="text"  name="template" value="<?= $page->template;?>" class="form-control" placeholder="Title">
								</div>
							</div>
                                <hr/>
                                <h4>English</h4>
							<div class="control-group">
								<label>Title</label>
								<div class="controls">
									<input type="text"  name="title_en" value="<?= $page->title_en;?>" class="form-control" placeholder="Title">
								</div>
							</div>
							<div class="control-group">
								<label>excerpt</label>
								<div class="controls">
									<textarea name="excerpt_en"  class="form-control"><?= $page->excerpt_en;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>content</label>
								<div class="controls">
									<textarea name="content_en"  class="form-control"><?= $page->content_en;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Key</label>
								<div class="controls">
									<textarea name="meta_key_en"  class="form-control"><?= $page->meta_key_en;?></textarea>	
								</div>
							</div>
							<div class="control-group">
								<label>Meta Description</label>
								<div class="controls">
									<textarea name="meta_desc_en"  class="form-control"><?= $page->meta_desc_en;?></textarea>	
								</div>
							</div>
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
								<input type="hidden" name="id" value="<?= $page->id;?>">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                        <a href="#" class="btn btn-danger" onclick="deletePage('<?= $page->id;?>')">Delete</a>
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

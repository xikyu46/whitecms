<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<div id="jstree-proton-1" style="margin-top:20px;" class="proton-demo">
				<?= view_mod('menu','outadmin');?>
				<a href="<?= base_url('admin/menu/add');?>" class="btn btn-primary">Add</a>
			</div>	
		</div>
		
			<div class="col-sm-9">
		
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>New Menu</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form form-vertical" id="formMenuEdit" method="post" action="<?= current_url();?>">
                                <div class="control-group">
                                    <label>Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Title (en)</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="title_en" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Url</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Parent</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="parent_id" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Position</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="position" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Hide</label>
                                    <div class="controls">
                                        <input type="checkbox" name="hide" value="1">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Save
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
formGeneral('#formMenuEdit');
</script>
<? $this->load->view(tpldir('admin/footer_view'));?>

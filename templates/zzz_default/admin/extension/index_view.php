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
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>All extension</h4>
                            </div>
                        </div>
                    </div>
		</div>
		
	</div>
</div>
<? $this->load->view(tpldir('admin/footer_view'));?>

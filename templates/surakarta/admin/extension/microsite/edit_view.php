<? $this->load->view(tpldir('admin/header_view'));?>
<link href="<?= tplurl('admin/includes/css/bootstrap-colorpicker.min.css');?>" rel="stylesheet">
<script src="<?= tplurl('admin/includes/js/bootstrap-colorpicker.min.js');?>"></script>
<? $this->load->view(tpldir('admin/navbar_view'));?>
<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Microsite <small>Add</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard 
					</li>
					<li>
						<i class="fa fa-edit"></i> Microsite 
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
		<form role="form" method="post" id="formNwsEdit" action="<?= current_url();?>">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Template Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						
							<div class="form-group">
								<label>Title:</label>
								<input type="text" name="template_title" required class="form-control" value="<?= $template->title;?>">
							</div>
							<div class="form-group">
								<label>Logo:</label>
								<input type="text" name="template_logo" required class="form-control" value="<?= $template->logo;?>">
							</div>
							<div class="form-group">
								<label>Judul Website :</label>
								<input type="text" name="template_judul" required class="form-control" value="<?= $template->judul;?>">
							</div>
							<div class="form-group">
								<label>Slogan:</label>
								<input type="text" name="template_slogan" required class="form-control" value="<?= $template->slogan;?>">
							</div>
							<div class="form-group">
								<label>Url:</label>
								<input type="text" name="url" required class="form-control"  value="<?= $microsite->url;?>">
							</div>
							<div class="form-group">
								<label>Warna Navbar:</label>
								<div class="input-group colorpicker" >
								<input type="text" name="template_navbar" class="form-control" value="<?= $template->navbar;?>"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Header Background:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_header"  class="form-control" value="<?= $template->header;?>"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Header Border:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_header_border"  class="form-control" value="<?= $template->header_border;?>"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Warna Footer:</label>
								<div class="input-group colorpicker">
								<input type="text" name="template_footer"  class="form-control" value="<?= $template->footer;?>"><span class="input-group-addon"><i></i></span>
								</div>
							</div>
							<div class="form-group">
								<label>Status:</label>
								<label class="checkbox-inline">
									<input name="status" value="1" <? if($microsite->status){echo "checked";}?> type="checkbox" > active
								</label>
							</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contact Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						
							<div class="form-group">
								<label>Facebook:</label>
								<input type="text" name="contact_facebook"  class="form-control" value="<?= $contact->facebook;?>">
							</div>
							<div class="form-group">
								<label>Twitter:</label>
								<input type="text" name="contact_twitter"  class="form-control" value="<?= $contact->twitter;?>">
							</div>
							<div class="form-group">
								<label>Instagram :</label>
								<input type="text" name="contact_instagram"  class="form-control" value="<?= $contact->instagram;?>">
							</div>
							<div class="form-group">
								<label>Google Plus:</label>
								<input type="text" name="contact_googleplus"  class="form-control" value="<?= $contact->googleplus;?>">
							</div>
							
							<div class="form-group">
								<label>Contact Image:</label>
								<input type="text" name="contact_image"  class="form-control" value="<?= $contact->contact;?>">
							</div>
							<div class="form-group">
								<label>Phone:</label>
								<input type="text" name="contact_phone"  class="form-control" value="<?= $contact->phone;?>">
							</div>
							
							<div class="form-group">
								<label>Email:</label>
								<input type="text" name="contact_email"  class="form-control" value="<?= $contact->email;?>">
							</div>
							<div class="form-group">
								<label>Address:</label>
								<textarea type="text" name="contact_address"  class="form-control"><?= $contact->address;?></textarea>
							</div>
						
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Content Variable</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Menu</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<? if($content){?>
										<? $index=0;?>
										<? foreach($content as $row){?>
											<tr>
												<td><?= $row->id;?></td>
												<td><?= $row->menu;?></td>
												<td><?= $row->status;?></td>
												<td>
													<a href="#" onclick="showModal('<?= base_url('admin/microsite/contentedit/'.$row->id);?>');">Edit</a>
													<? if($index){?>
														<a href="#" onclick="deletePage('<?= $row->id;?>');">Delete</a>
													<? }?>
												</td>
											</tr>
										<? $index++;?>
										<? }?>
									<? }?>
								</tbody>
							</table>
							<a href="#" onclick="showModal('<?= base_url('admin/microsite/contentadd/'.$contact->mid);?>');">New Content</a>
						</div>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div>
			
			
			<input type="submit" class="btn btn-success pull-right" value="Submit" role="button">
		</form>
		</div>
	</div> <!-- end: page content container --> 
<script>
formGeneral('#formNwsEdit');
$(function(){
	$('.colorpicker').colorpicker();
});
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus content ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/microsite/contentdelete/'+id,function(data){
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
<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>

<div id="page-wrapper"> <!-- start: page content -->
	<div class="container-fluid"> <!-- start: page content container -->
		<div class="row"> <!-- start: Page Heading -->
			<div class="col-lg-12">
				<h1 class="page-header">
					Dashboard <small>Front Page Controller</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard
					</li>
				</ol>
			</div>
		</div> <!-- end: Page Heading -->
		<div class="row">
			<div class="col-lg-5"> <!-- start: panel tree -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Menu Tree
							<a class="pull-right" href="<?= base_url('admin/menu/add');?>"><i class="fa fa-plus"></i> New Menu</a>
						</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<?= view_mod('menu','outadmin',$menu->id);?>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div> <!-- end: panel tree -->
			<div class="col-lg-7"> <!-- start: panel form -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Menu Editor</h3>
					</div> <!-- end: panel heading -->
					<div class="panel-body">
						<form role="form" id="formMenuEdit" action="<?= current_url();?>" method="post">
							<div class="form-group">
								<label>Title:</label>
								<input class="form-control" placeholder="Title" name="title" required value="<?= $menu->title;?>" />
							</div>
							<div class="form-group">
								<label>Title(en)</label>
								<input class="form-control" placeholder="Title" name="title_en" required value="<?= $menu->title_en;?>"/>
							</div>
							<div class="form-group">
								<label>Parent</label>
								<input class="form-control" name="parent_id" value="<?= $menu->parent_id;?>"/>
							</div>
							<div class="form-group">
								<label>Relation</label>
								<? if($page){?>
									<select name="post_id" class="form-control">
										<? foreach($page as $pageRow){?>
											<option value="<?= $pageRow->id;?>" <? if($menu->post_id == $pageRow->id){echo "selected";} ?> ><?= $pageRow->title;?></option>
										<? }?>
									</select>
								<? }?>
							</div>
							<div class="form-group">
								<label>Position</label>
								<input class="form-control" name="position" value="<?= $menu->position;?>"/>
							</div>
							<div class="form-group">
								<label>Hide</label>
								<div class="form-control">
									<input type="checkbox" name="hide" value="1" <? if($menu->hide){echo "checked";}?>>
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="<?= $menu->id;?>">
								<button type="submit" class="btn btn-success pull-left">Save</button>
								<a  href="#" onclick="deleteMenu('<?= $menu->id;?>');" class="btn btn-danger pull-right">Delete</a>
							</div>
						</form>
					</div> <!-- end: panel body -->
				</div> <!-- end: panel -->
			</div> <!-- end: panel form -->
		</div>
	</div> <!-- end: page content container -->

<script>
formGeneral('#formMenuEdit');

function deleteMenu(id){
	bootbox.confirm('Anda yakin akan menghapus menu ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/menu/delete/'+id,function(data){
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

</script>
<? $this->load->view(tpldir('admin/footer_view'));?>

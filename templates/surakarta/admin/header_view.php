<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="base_url"  content="<?= base_url();?>" />
		<meta name="description" content="Website Pemerintah Kota Surakarta">
		<meta name="author" content="baratimur">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?= tplurl('admin/includes/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?= tplurl('admin/includes/css/sb-admin.css');?>" rel="stylesheet">
		<link href="<?= tplurl('admin/includes/css/plugins/morris.css');?>" rel="stylesheet">
		<link href="<?= tplurl('admin/includes/css/proton/style.min.css');?>" rel="stylesheet">
		<link href="<?= tplurl('admin/includes/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
		<link href="<?= tplurl('admin/includes/css/datepicker.css');?>" rel="stylesheet">
		
		<script src="<?= tplurl('admin/includes/js/jquery.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/bootstrap.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/bootbox.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/jquery.form.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/jquery.validate.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/scripts.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/ckeditor.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/jstree.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/bootstrap-datepicker.min.js');?>"></script>
		<title>Admin | Pemerintah Kota Surakarta</title> <!-- title dijadikan variabel di setting website -->
	</head>
	<body>
<!-- header -->
		<div id="wrapper"> <!-- start: main wrapper -->

		
		<div id="defaultModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" id="defaultModalContent">
					...
				</div>
			</div>
		</div>
<script>
function showModal(url , post){
	$.post(url,post,function(data){
		$('#defaultModalContent').html(data);
		$('#defaultModal').modal('show');
	});
}
</script>
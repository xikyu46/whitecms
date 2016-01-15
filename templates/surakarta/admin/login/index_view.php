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
		<link href="<?= tplurl('admin/includes/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
		
		<script src="<?= tplurl('admin/includes/js/jquery.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/bootstrap.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/bootbox.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/jquery.form.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/jquery.validate.min.js');?>"></script>
		<script src="<?= tplurl('admin/includes/js/scripts.js');?>"></script>

		<title>Admin | Pemerintah Kota Surakarta</title> <!-- title dijadikan variabel di setting website -->
	</head>
	<body>
<style type="text/css">
	body {background-color: #FFFFFF;}

	.row-fluid {
        width: 100%;
    }

    .login-box {
        width: 400px;
        margin: 100px auto;
    }
</style>
	<div class="row-fluid">
		<div class="login-box">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-user fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">Login</div>
									<div>surakarta.go.id</div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<? if($error){?>
								<label style="color:red"><?= $error;?></label>
							<? }?>
							<form role="form" method="post" action="<?= current_url();?>">
								<div class="form-group">
									<label>Username:</label>
									<input class="form-control"  name="username" placeholder="Enter text">
								</div>
								<div class="form-group">
									<label>Password:</label>
									<input type="password" class="form-control" name="password" placeholder="Enter text">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-danger pull-right">Login</button>
								</div>
							</form>
						</div>
<!-- 						<div class="panel-footer"> -->
<!-- 							<span class="pull-left">Forgot password <i class="fa fa-arrow-circle-right"></i></span> -->
<!-- 							<div class="clearfix"></div> -->
						</div>
					</div>
		</div>
	</div>
	</body>
</html>
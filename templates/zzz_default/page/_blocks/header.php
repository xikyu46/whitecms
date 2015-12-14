<!DOCTYPE html>
	<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="blank">
	<meta name="author" content="">

	<title>Pemerintah Kota Surakarta</title>

	<link rel="stylesheet" href="<?= incurl('css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?= incurl('css/main.css');?>">
	<link rel="canonical" href="http://lupekz.net/">
	
	<script src="<?= incurl('js/jquery.min.js');?>"></script>
	<script src="<?= incurl('js/bootstrap.min.js');?>"></script>
	<script src="<?= incurl('js/bootstrap-select.min.js');?>"></script>
	<script src="<?= incurl('js/main.js');?>"></script>
</head>

  <body>

<div class="header">
	<div class="container">

		<div class="row top-head">
			<div class="col-md-8 col-sm-7">
				<div class="logo-wrapper">
					<img class="img-responsive" src="<?= incurl('image/logo_surakarta_small.png');?>">
					<div class="title-wrapper">
						<h3>Pemerintah Kota Surakarta</h3>
						<h4>www.surakarta.go.id</h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-5">
				<ul class="list-inline pull-right">
					<li><a href="#">ENGLISH</a></li>
					<li class="active"><a href="#">INDONESIA</a></li>
				</ul>
			</div>
		</div>
		
		<nav class="navbar navbar-default navbar-portal">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<?= view_mod('menu','outclient');?>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			</form>

			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
		</nav>
	</div>
</div>
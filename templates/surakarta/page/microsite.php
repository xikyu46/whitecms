<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $template->title;?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/app.css');?>">
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/custom.css');?>">
	<style>
	
	.navbar-pemprov-bg {
		/*
		PERUNTUKAN: warna untuk navbar
		*/
	background-color: <?= $template->navbar;?>;
	}
	.site-title-bg {
		/*
		PERUNTUKAN: warna untuk header
		variabel: keduanya dibuat variabel
		*/
		background-color: <?= $template->header;?>;
	border-color: <?= $template->header_border;?>;	
	}

	.footer-bg{
		/*
		PERUNTUKAN: warna untuk header
		*/
		background-color: <?= $template->footer;?>;
	}
	<? if(isset($content[0])){?>
	.first-background {
		/*
		PERUNTUKAN: backround image dari Seksi FIRST CONTENT
		variabel: background-image saja
		*/
		/*background-image: url("../img/parallax_01.jpg");*/
		background-image: url("<?= $content[0]->background;?>");
		background-repeat: no-repeat;
		background-size: cover;
	}
	<? }?>
	</style>
</head>

  <body data-spy="scroll" data-target="#navbar-scrollspy" data-offset="150"> 
    
    <nav class="navbar navbar-default navbar-pemprov navbar-fixed-top navbar-pemprov-bg">
  <div class="site-title site-title-bg">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand logo" href="#"><img src="http://1.bp.blogspot.com/-hL_fQNve-Vg/VJ2N869zw1I/AAAAAAAAAss/GHaiHQ9IQ3g/s280/logo%2Bsolo%2Bthe%2Bspirit%2Bof%2Bjava.png"></a> <!-- PERUNTUKAN: Variabel URL Logo -->
      </div>
      <section>
        <h3><?= $template->judul;?></h3> <!-- PERUNTUKAN: Variabel Judul Website -->
        <h4><?= $template->slogan;?></h4> <!-- PERUNTUKAN: Variabel Slogan Website -->
      </section>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
		<? if($content){?>
			<? $index=0;?>
			<? foreach($content as $contentRow){?>
				<? if(!$index){?>
					<span class="sr-only">Toggle navigation</span>
				<? }else{?>
					<span class="icon-bar"></span>
				<? }?>
			<? $index++;?>
			<? }?>
			<span class="icon-bar"></span>
		<? }?>
      </button>
      <a class="navbar-brand logo" href="/"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-scrollspy">
      <ul class="nav navbar-nav">
        <!-- PERUNTUKAN: Variabel Menu dan Link Anchor Menu -->
        	<? if($content){?>
			<? $index=0;?>
			<? foreach($content as $contentRow){?>
				<? if(!$index){?>
					<li class="active"><a href="#<?= $contentRow->anchor;?>"><?= $contentRow->menu;?></a></li>
				<? }else{?>
					<li ><a href="#<?= $contentRow->anchor;?>"><?= $contentRow->menu;?></a></li>
				<? }?>
			<? $index++;?>
			<? }?>
			<li ><a href="#kontak">Kontak</a></li>
		<? }?>     
         <!-- END PERUNTUKAN: Variabel Menu dan Link Anchor Menu -->
      </ul>
    </div>
  </div>
</nav>
    
<a href="#<?= $content[0]->anchor;?>" class="btn btn-default btn-anchor-back visible-md-block visible-lg-block"><i class="fa fa-chevron-up fa-lg"></i><section><span>kembali ke atas</span></section>
</a>
<!-- START: Seksi FIRST CONTENT -->
<div class="parallax-content first-content first-background" id="<?= $content[0]->anchor;?>">
  <div class="content-quotes quote-front" >
    <div class="row">
      <div class="col-md-12">
        <h3>"<?= $content[0]->content;?>"</h3>
      </div>
    </div>
  </div>
  <div class="content-foot">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <ul class="list-inline text-right">
			<? if($contact->facebook){?>
				<li class="text-center">
				<a href="#">
					<span>Facebook Account</span>
					<span class="fa-stack fa-lg">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				</li>
			<? }?>
			<? if($contact->twitter){?>
				<li class="text-center">
				<a href="#">
					<span>Twitter Account</span>
					<span class="fa-stack fa-lg">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				</li>
			<? }?>
			<? if($contact->instagram){?>
				<li class="text-center">
				<a href="#">
					<span>Instagram Account</span>
					<span class="fa-stack fa-lg">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				</li>
			<? }?>
			<? if($contact->googleplus){?>
				<li class="text-center">
				<a href="#">
					<span>Google Plus Account</span>
					<span class="fa-stack fa-lg">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="fa fa-googleplus fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				</li>
			<? }?>   
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: Seksi FIRST CONTENT -->



<? foreach($content as $key => $contentRow){?>
	<? if($key){?>
		<section class="parallax-windows" data-image-src="<?= $contentRow->background;?>" id="<?= $contentRow->anchor;?>"></section>
		<!-- END: PARALAX #1 - image -->

		<!-- START: PARALAX #1 - content -->
		<div class="container parallax-content">
		<div class="row">
		<div class="col-md-12">
			<h1><?= $contentRow->menu;?></h1>
			<hr>
			<p>
			<?= $contentRow->content;?>
			</p>
		</div>
		</div>
		</div>		
	<? }?>
<? }?>


<!-- START PARALAX KONTAK -->
  <!-- START: PARALAX KONTAK - image -->
<section class="parallax-windows" data-image-src="<?= $contact->contact;?>" id="kontak"></section>
<!-- <section class="parallax-windows" data-image-src="assets/img/parallax_06.png" id="kontak"></section> -->
  <!-- END: PARALAX KONTAK - image -->

  <!-- START: PARALAX KONTAK - content -->
<div class="container parallax-content">
  <div class="row">
    <div class="col-md-12">
      <h1>Kontak Kami</h1>
      <hr>
      <h5>Silakan hubungi kontak berikut ini:</h5>
      
      <div class="row">

        <div class="col-md-12">
          <ul class="list-inline list-contact">        
            <li>
              <section>
                <i class="fa fa-phone fa-2x"></i>
                <span><?= $contact->phone;?></span>
              </section>
            </li>
            <li>
              <section>
                <i class="fa fa-envelope-o fa-2x"></i>
                <span><?= $contact->email;?></span>
              </a>
            </li>
            <li>
              <section>
                <i class="fa fa-building-o fa-2x"></i>
                <span><?= $contact->address;?></span>
              </section>
            </li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
<!-- END: PARALAX KONTAK - content -->


    
    <div class="footer footer-bg fixed-bottom">
  <div class="container">
    <p>Copyright © 2015  - Dinas Komunikasi Informatika Pemerintah Kota Surakarta - All Rights Reserved </p>
  </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?= tplurl('page/_microsite/js/jquery.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/bootstrap.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/bootstrap-select.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/parallax.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/parallax-trigger.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/main.js');?>"></script>
  </body>
</html>
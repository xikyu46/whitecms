<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
	<!-- Indicators -->
	<div id="homeCarousel" class="carousel slide" data-ride="carousel">
			<? if($banner){?>
				<ol class="carousel-indicators">
				<? $index=0;?>
				<? foreach($banner as $row){?>
					<li data-target="#homeCarousel" data-slide-to="<?= $index;?>" <? if(!$index){echo 'class="active"';}?>></li>
					<? $index++;?>
				<? }?>
				</ol>
			<? }?>

			<? if($banner){?>
				<div class="carousel-inner" role="listbox">
				<? $index=0;?>
				<? foreach($banner as $row){?>
					<div class="item <? if(!$index){echo "active";}?>">
						<img  src="<?= $row->imgurl;?>" >
						<div class="container">
							<div class="carousel-caption">
							<h1><a href="<?= $row->url;?>"><?= $row->{'title'.$lang_sess};?></a></h1>
							<p><?= parse_url($row->url, PHP_URL_HOST);?> (<?= date('Y-m-d', $row->date);?>) - <?= $row->{'text'.$lang_sess};?></p>
							</div>
						</div>
					</div>
					<? $index++;?>
				<? }?>
				</div>
			<? }?>

			<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>

			<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
	</div>
	<!-- /.carousel -->




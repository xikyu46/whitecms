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
						<img  src="<?= $row->url;?>" >
						<div class="container">
							<div class="carousel-caption">
							<p><?= $row->text;?></p>
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




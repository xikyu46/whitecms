	<div class="home-newsticker">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="carousel-newsticker" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<? $index=0;?>
					<? if($newsticker){?>
						<? foreach($newsticker as $newstickerRow){?>
						<div class="item <? if(!$index){ echo "active";}?>">
							<div class="carousel-caption">
								<h4><?= $newstickerRow->text;?></h4>
							</div>
						</div>
						<? $index++;?>
						<? }?>
					<? }?>
				</div>

			</div>

		</div>
	</div>
	</div>
	</div>
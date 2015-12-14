		<h3 class="home-title">Video</h3>
		<? if($video){?>
			<? for( $i=0; $i < 2; $i++){?>
				<div class="home-post-video">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?= $video[$i]->url;?>"></iframe>
					</div>
					<h4 class="home-post-title"><a href="<?= base_url('blog/video/'.$video[$i]->id);?>" ><?= $video[$i]->text;?></a></h4>
					<hr>
				</div>
			<? }?>
		<? }?>
		<h4 class="more"><a href="#">More Videos <i class="fa fa-angle-right"></i></a></h4>
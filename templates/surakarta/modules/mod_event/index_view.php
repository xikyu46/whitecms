 <h3 class="home-title">Events</h3>
 <div class="row">
	<? if($event){?>
		<? for($i = count($event)-1; $i >= 0 ; $i--){?>
			<div class="col-md-3">
				<div class="event-date kuning">
					<i class="fa fa-calendar"></i>
					<span class="home-event-date text-muted ijo"><?= date('d F Y',$event[$i]->date);?></span>
				</div>
				<img class="img-responsive img-thumbnail" src="<?= $event[$i]->image;?>">
				<div class="event-title"><a href="<?= $event[$i]->url;?>"><?= $event[$i]->title;?></a></div>
			</div>
		<? }?>
	<? }?>
    </div>
   
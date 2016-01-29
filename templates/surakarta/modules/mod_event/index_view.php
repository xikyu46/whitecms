 <? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
 <h3 class="home-title">Events</h3>
 <div class="row">
	<? if($event){?>
		<? for($i = 0; $i < count($event) ; $i++){?>
			<div class="col-md-3">
				<div class="event-date kuning">
					<i class="fa fa-calendar"></i>
					<span class="home-event-date text-muted ijo"><?= date('d F Y',$event[$i]->date);?></span>
				</div>
				<img class="img-responsive img-thumbnail" src="<?= $event[$i]->image;?>">
				<div class="event-title"><a href="<?= $event[$i]->url;?>"><?= $event[$i]->{'title'.$lang_sess};?></a></div>
			</div>
		<? }?>
	<? }?>
    </div>
   
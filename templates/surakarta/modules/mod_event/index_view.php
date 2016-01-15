 <h3 class="home-title">Events</h3>
 <div class="row">
	<? if($event){?>
		<? for($i = count($event)-1; $i >= 0 ; $i--){?>
			<div class="col-md-3">
				<div class="event-date">
					<i class="fa fa-calendar"></i>
					<span class="text-muted"><?= date('d F Y',$event[$i]->date);?></span>
				</div>
				<h4 class="event-title">
					<? if(preg_match('#'.preg_quote('http://').'#',$event[$i]->url)){?>
						<a href="<?= $event[$i]->url;?>"><?= $event[$i]->title;?></a>
					<? }else{?>
						<a href="<?= base_url($event[$i]->url);?>"><?= $event[$i]->title;?></a>
					<? }?>
					
				</h4>
			</div>
		<? }?>
	<? }?>
    </div>
   
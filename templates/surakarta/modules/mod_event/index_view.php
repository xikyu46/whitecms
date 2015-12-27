 <h3 class="home-title">Events</h3>
 <div class="row">
	<? if($event){?>
		<? foreach($event as $row){?>
			<div class="col-md-3">
				<div class="event-date">
					<i class="fa fa-calendar"></i>
					<span class="text-muted"><?= date('d F Y',$row->date);?></span>
				</div>
				<h4 class="event-title">
					<? if(preg_match('#'.preg_quote('http://'),'#'),$row->url){?>
						<a href="<?= $row->url;?>"><?= $row->title;?></a>
					<? }else{?>
						<a href="<?= base_url($row->url);?>"><?= $row->title;?></a>
					<? }?>
					
				</h4>
			</div>
		<? }?>
	<? }?>
    </div>
   
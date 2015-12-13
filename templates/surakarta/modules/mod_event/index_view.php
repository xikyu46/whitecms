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
					<a href="#"><?= $row->title;?></a>
				</h4>
			</div>
		<? }?>
	<? }?>
      
      <div class="col-md-3">
        <div class="event-date">
          <i class="fa fa-calendar"></i>
          <span class="text-muted">25 November 2015</span>
        </div>
        <h4 class="event-title">
          <a href="#">Lorem Ipsum is simply dummy text.</a>
        </h4>
      </div>
      <div class="col-md-3">
        <div class="event-date">
          <i class="fa fa-calendar"></i>
          <span class="text-muted">25 November 2015</span>
        </div>
        <h4 class="event-title">
          <a href="#">Lorem Ipsum is simply dummy text.</a>
        </h4>
      </div>
      <div class="col-md-3">
        <div class="event-date">
          <i class="fa fa-calendar"></i>
          <span class="text-muted">25 November 2015</span>
        </div>
        <h4 class="event-title">
          <a href="#">Lorem Ipsum is simply dummy text.</a>
        </h4>
      </div>
    </div>
   
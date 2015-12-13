<div class="col-md-4">
        <div class="home-top-banner">
          <ul class="list-unstyled">
			<? if($banner){?>
				<? for($i =0; $i < 3; $i++){?>
					<li><img class="img-responsive img-rounded" src="<?= $banner[$i]->url;?>" alt="img one"></li>
				<? }?>
			<? }?>            
          </ul>
        </div>
      </div>
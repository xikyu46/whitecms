
      <div class="col-md-8">

        <div id="carousel-main" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <? if($banner){?>
			<? $index=0;?>
			 <? foreach($banner as $row){?>
				 <div class="item <? if(!$index){echo "active";}?>">
				<img class="img-responsive img-rounded" src="<?= $row->url;?>" alt="img one">
				<div class="carousel-caption">
					<?= $row->text;?>
				</div>
				</div>
				<? $index++;?>
			<? }?>
		<? }?>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
            <i class="fa fa-chevron-right"></i>
            <span class="sr-only">Next</span>
          </a>

          <!-- Indicators -->
          <ol class="carousel-indicators">
			<? if($banner){?>
			 <? for($i =0; $i < 4 ; $i++){?>
				 <? if(isset($banner[$i])){?>
				 <li data-target="#carousel-main" data-slide-to="0" class="active">
				<img class="img-responsive img-rounded" src="<?= $banner[$i]->url;?>" alt="img one">
				</li>
				<? }?>
			<? }?>
		<? }?>
          </ol>
        </div>

      </div>


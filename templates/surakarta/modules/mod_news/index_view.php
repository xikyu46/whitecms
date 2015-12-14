<div class="col-md-5">
				<h3 class="home-title">News</h3>
					<div class="home-post-list">
						<? if($news){?>
							<? foreach($news as $row){?>
								<div class="home-post-content">
									<span class="home-post-date text-muted"><?= date('F d,Y',$row->update);?></span>
									<img class="img-responsive img-thumbnail" src="<?= $row->image;?>">
									<h4 class="home-post-title"><a href="#"><?= $row->title;?></a></h4>
									<p><?= $row->content;?></p>
									<hr>
								</div>		
							<? }?>
						<? }?>
						<h4 class="more"><a href="#">More News <i class="fa fa-angle-right"></i></a></h4>
					</div>
				</div>
				 

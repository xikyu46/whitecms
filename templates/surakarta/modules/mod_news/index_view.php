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
						
						<div class="home-post-content">
							<span class="home-post-date text-muted">November 13, 2015</span>
							<img class="img-responsive img-thumbnail" src="http://placehold.it/500x350?text=IMG">
							<h4 class="home-post-title"><a href="#">Lorem Ipsum is simply dummy text.</a></h4>
							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
							<hr>
						</div>
						<div class="home-post-content">
							<span class="home-post-date text-muted">November 17, 2015</span>
							<img class="img-responsive img-thumbnail" src="http://placehold.it/500x350?text=IMG">
							<h4 class="home-post-title"><a href="#">Lorem Ipsum is simply dummy text.</a></h4>
							<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<hr>
						</div>
						<h4 class="more"><a href="#">More News <i class="fa fa-angle-right"></i></a></h4>
					</div>
				</div>
				 

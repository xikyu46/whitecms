<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="col-md-5">
				<h3 class="home-title">News</h3>
					<div class="home-post-list">
						<? $index = 0;?>
						<? if($news){?>
							<? foreach($news as $row){?>
								<? if($index < 4){?>
								<div class="home-post-content">
									<span class="home-post-date text-muted"><?= date('F d,Y',$row->update);?></span>
									<img class="img-responsive img-thumbnail" src="<?= $row->image;?>">
									<h4 class="home-post-title"><a href="<?= base_url($row->url);?>"><?= $row->{'title'.$lang_sess};?></a></h4>
									<p><?= content_trim($row->{'content'.$lang_sess},200);?></p>
									<hr>
								</div>
								<? }?>
								<? $index++;?>
							<? }?>
						<? }?>
						<h4 class="more"><a href="<?= base_url('blog/cat/news');?>">More News <i class="fa fa-angle-right"></i></a></h4>
					</div>
				</div>
				 

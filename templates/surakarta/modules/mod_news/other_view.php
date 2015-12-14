<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
			<div class="row">
				<? if($news){?>
					<? foreach($news as $row){?>
						<div class="col-md-4">
							<div class="related-post-content">
							<span class="related-post-date text-muted"><?= date('F d, Y',$row->date);?></span>
							<img class="img-responsive img-thumbnail" src="<?= $row->image;?>" />
							<h4 class="related-post-title"><a href="<?= base_url($row->url);?>"><?= $row->{'title'.$lang_sess};?></a></h4>
							<p><?= content_trim($row->{'content'.$lang_sess},200);?></p>
							</div>
						</div>
					<? }?>
				<? }?>
			</div>
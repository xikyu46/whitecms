<? if($video){?>
	<div class="row">
		<? foreach($video as $row){?>
			<div class="col-md-3 col-sm-3">
				<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/syZX-nTWGto"></iframe>
				</div>
			<h4 class="video-title">
				<a href="<?= base_url('blog/video/'.$row->id);?>"><?= $row->text;?></a>
			</h4>
				<span class="video-date text-muted"><?= date('F d, Y',$row->date);?></span>
			</div>
		<? }?>
	</div>
<? }?>
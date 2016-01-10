<? $lang_sess = (getlang()) ? '_'.getlang() : ''?>
<? if($news){?>
	<h3 class="home-title">Pengumuman</h3>
	<!-- Tab panes -->
	<div class="tab-content">
		<? $index=0;?>
		<? foreach($news as $row){?>
		<div role="tabpanel" class="tab-pane <? if(!$index){echo "active";}?>" id="<?= $index+1;?>">
			<a title="<?= $row->{'title'.$lang_sess};?>" href="#"><?= $row->{'title'.$lang_sess};?></a>
			<div class="top-date"><?= date('F d,Y',$row->update);?></div>
			<p><?= content_trim($row->{'content'.$lang_sess},200);?></p>
		</div>
		<? $index++;?>
		<? }?>
	</div>
	<!-- Nav tabs -->
	
	<? $index=0;?>
		<ul class="nav nav-tabs tabs-highlight" role="tablist">
		<? foreach($news as $row){?>
			<li role="presentation" class="<? if(!$index){echo "active";}?> tabs-highlight-point"><a href="#<?= $index+1;?>" aria-controls="<?= $index+1;?>" role="tab" data-toggle="tab" class="ini-test"><?= $index+1;?></a></li>
			<? $index++;?>
		<? }?>
			<li role="presentation" class="tabs-highlight-point"><a href="<?= base_url('blog/cat/news/9');?>" target="_blank" aria-controls="6"  class="ini-test">Index >></a></li>
		</ul>
<? }?>

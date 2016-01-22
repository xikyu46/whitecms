	<? if($footer){?>
		<? foreach($footer as $footRow){?>
			<li><a href="<?= $footRow->url;?>"><?= $footRow->name;?></a></li>
		<? }?>
	<? }?>
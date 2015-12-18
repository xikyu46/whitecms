<ul class="list-inline">
<? if($sosmed){?>
	<? foreach($sosmed as $sosmedRow){?>
		<li>
			<a href="<?= $sosmedRow->url;?>">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa <?= $sosmedRow->icon;?> fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</li>
	<? }?>
<? }?>
						
						
</ul>
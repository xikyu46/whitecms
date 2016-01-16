<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="related-post">
							<ul class="list-unstyled">
								<? if($news){?>
									<? $index=0;?>
									<? foreach($news as $row){?>
										<? if($index < 5){?>
										<li><a href="<?= base_url($row->url);?>"><?= $row->{'title'.$lang_sess};?></a></li>
										<? }?>
										<? $index++;?>
									<? }?>
								<? }?>
							</ul>
						</div> 

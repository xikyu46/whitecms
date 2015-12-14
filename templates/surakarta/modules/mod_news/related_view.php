<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="related-post">
							<ul class="list-unstyled">
								<? if($news){?>
									<? foreach($news as $row){?>
										<li><a href="<?= base_url($row->url);?>"><?= $row->{'title'.$lang_sess};?></a></li>
									<? }?>
								<? }?>
							</ul>
						</div> 
